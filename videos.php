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
                echo "
<video controls width='' height='' muted>
<source src='$vid'>
</video>
";
            }
        ?>
    </body>
</html>