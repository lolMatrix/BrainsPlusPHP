<?php
/*Установка заголовка для вывода изображения в формате пнг*/
header('Content-Type: image/png');
/*Настройка и вывод изображения*/
include_once('Image.php');
$image = new Image();
$image->loadImage('image.png');
$image->resizeImage(500, 500);
$image->outputImage();
