<?php
$image = imagecreatefromjpeg("assets/logos/commuFrog.jpeg");

$logoImage = imagecreatefrompng("assets/logos/GetImage.png");
imagealphablending($logoImage, true);

$imageWidth=imagesx($image);
$imageHeight=imagesy($image);

$logoWidth=imagesx($logoImage);
$logoHeight=imagesy($logoImage);

$color = imagecolorallocate($image, 0, 0, 0);
$font = "assets/font/PTSerif-Regular.ttf";

imagecopy($image, $logoImage, $imageWidth/2-50, $imageHeight/2, 0, 0, $logoWidth, $logoHeight);
imagettftext($image, 50, 0, $imageWidth/2-50, $imageHeight/2+100, $color, $font, 'I2b');
imagettftext($image, 50, 0, $imageWidth/2-110, $imageHeight/2-25, $color, $font, 'Klemen');

header("Content-type: image/jpeg");
imagejpeg($image);

imageDestroy($image);
imageDestroy($logoImage);