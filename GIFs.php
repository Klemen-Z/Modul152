<html lang="en">
    <head>
        <?php
        include("Header.php");
        ?>
        <title>GIF Gallery</title>
    </head>
    <body>
        <nav class="navbar"><a href="index.php"> Homepage </a> <a href="pictures.php"> Image Gallery </a> <a href="videos.php"> Video gallery </a></nav>
        <?php
            foreach(glob("./assets/GIFs/*.gif") as $gif){
                echo "<img class='content' src='$gif' width='400' height='auto' alt='GIF Failed to Load'>";
            }
        ?>
    </body>
</html>