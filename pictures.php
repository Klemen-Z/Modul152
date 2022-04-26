<html lang="en">
    <head>
        <?php
        include("Header.php");
        ?>
        <title>Image Gallery</title>
    </head>
    <body>
        <nav><a href="index.php"> Homepage </a> <a href="GIFs.php"> GIF Gallery </a> <a href="videos.php"> Video gallery </a></nav>
        <?php
            include("copy.php");
            foreach(glob("./assets/Thumbnails/*") as $img){
                $imgN = explode(".", $img);
                $imgN = explode("/", $imgN[1]);
                echo "<a href='bigImg.php?img=$imgN[3]'><img src='$img' alt='Image Failed to Load'></a>";
            }
        ?>
    </body>
</html>