<?php
class Image{
    private $img;
    /*Загрузка изображения в объект*/
    function loadImage($imgFileName){
        $this->img = imagecreatefrompng($imgFileName);        
    }
    /*getWidth и getHeight возвращают длинну и ширину соответственно*/ 
    private function getWidth() {
        return imagesx($this->img);
    }
    private function getHeight() {
        return imagesy($this->img);
    }
    /*Изменение размера изображения*/
    public function resizeImage($widht, $height){
        $resizedImg = imagecreatetruecolor($widht, $height);
        imagecopyresampled($resizedImg, $this->img, 0, 0, 0, 0, $widht, $height, $this->getWidth(), $this->getHeight());
        $this->img = $resizedImg;
        
    }
    /*Вывод изображения*/
    public function outputImage(){
        imagepng($this->img);
    }
    
}