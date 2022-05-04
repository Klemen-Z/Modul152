<html lang="en">
    <head>
        <?php
        include("Header.php");
        ?>
        <title>GIF Gallery</title>
    </head>
    <body>
        <nav><a href="index.php"> Homepage </a> <a href="pictures.php"> Image Gallery </a> <a href="videos.php"> Video gallery </a></nav>
        <?php
            foreach(glob("./assets/GIFs/*.gif") as $gif){
                echo "<img src='$gif' alt='GIF Failed to Load'>";
            }
        ?>
    </body>
</html>