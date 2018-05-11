<?php

define('BASEPATH', str_replace('\\', '/', __DIR__.'/../web/');

function drawText($bg, $draw, $font_name, $font_color, $font_size, $x, $y, $text){
    $draw->setFont(BASEPATH.'/fonts/'.$font_name);
    $draw->setFillColor("rgb(".$font_color.")");
    $draw->setFontSize($font_size);
    $bg->annotateImage($draw, $x, $y, 0, mb_strtoupper($text, 'UTF-8'));
}

function drawImage($bg, $image, $x, $y, $width, $height, $rounding_off){
    $img = new Imagick();
    $img->readImageBlob($image);
    $img->adaptiveResizeImage(150, 150, 100);
    if($rounding_off) {
        $img->adaptiveResizeImage($width, $height, 100);
        $img->setImageFormat('jpg');
        $img->roundCornersImage(90, 90, 0, 0, 0);
    }
    $bg->compositeImage($img, Imagick::COMPOSITE_DEFAULT, $x, $y);
}

?>