<html lang="en">
    <head>
        <?php
        include("Header.php");
        ?>
        <title>Video Gallery</title>
    </head>
    <body>
        <nav><a href="index.php"> Homepage </a> <a href="pictures.php"> Image Gallery </a> <a href="GIFs.php"> GIF Gallery </a></nav>
        <?php
            foreach(glob("./assets/Videos/*") as $vid){
                list($width, $height) = getimagesize($vid);
                $newHeight = $height*(500/$width);
                echo "
<video controls width='$width' height='$newHeight' muted>
<source src='$vid' type='vid/mp4'>
</video>
";
            }
        ?>
    </body>
</html>