<?php
    $image = imagecreatefromjpeg('assets/logos/commuFrog.jpeg');
    $addedImg = imagecreatefrompng('assets/logos/GetImage.png');
    $size = 20;
    $addedImgSize = imagescale($addedImg, imagesx($addedImg) / $size, imagesy($addedImg) / $size);

    $font = 'arial.ttf';
    $lightBoi = 255;
    $color = imagecolorallocate($image, $lightBoi, $lightBoi, $lightBoi);
    list($width, $height) = getimagesize('assets/logos/commuFrog.jpeg');

    imagettftext($image, 100, 0, $width/2, $height/2+50, $color, $font, 'Klemen');
    imagettftext($image, 100, 0, $width/2, $height/2-50, $color, $font, 'I2B');

    imagecopy($image, $addedImgSize, $width/2, $height/2, 0, 0, imagesx($addedImgSize), imagesy($addedImgSize));

    header('Content-Type: image/jpg');

    imagejpeg($image);
    imagedestroy($image);