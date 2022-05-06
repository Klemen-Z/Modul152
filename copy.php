<?php
    if(file_exists("./assets/tempStore/lol")){
        unlink("./assets/tempStore/lol");
    }
    foreach(glob("./assets/tempStore/*") as $img){
        $newPath1 = "assets/Thumbnails/";
        $newPath2 = "assets/Images/";

        $imgN = explode(".", $img);
        $type = $imgN[2];
        $imgN = explode("/", $imgN[1]);
        list($width, $height) = getimagesize($img);

        $newHeight1 = round($height*(200/$height));
        $newHeight2 = round($height*(500/$height));

        if($type == "jpeg"){
            $thumb = imagecreatetruecolor(200, $newHeight1);
            $image = imagecreatetruecolor(500, $newHeight2);
            $source = imagecreatefromjpeg($img);
            $ext = '.jpeg';
        } elseif ($type == "png"){
            $thumb = imagecreatetruecolor(200, $newHeight1);
            $image = imagecreatetruecolor(500, $newHeight2);
            $source = imagecreatefrompng($img);
            $ext = '.png';
        }

        $newName1  = $newPath1.$imgN[3].$ext;
        $newName2  = $newPath2.$imgN[3].$ext;

        imagecopyresized($thumb, $source, 0, 0, 0, 0, 200, $newHeight1, $width, $height);
        if($type == "jpeg"){
            $copied1 = imagejpeg($thumb, $newName1);
        } elseif ($type == "png"){
            $copied1 = imagepng($thumb, $newName1);
        }
        imagecopyresized($image, $source, 0, 0, 0, 0, 500, $newHeight2, $width, $height);
        if($type == "jpeg"){
            $copied2 = imagejpeg($image, $newName2);
        } elseif ($type == "png"){
            $copied2 = imagepng($image, $newName2);
        }

        if($copied1 && $copied2){
            unlink($img);
        }
    }
    fopen("./assets/tempStore/lol", "w");