<html lang="en">
    <head>
        <?php
        include("Header.php");
        ?>
        <title>Video Gallery</title>
    </head>
    <body>
        <nav class="navbar"><a href="index.php"> Homepage </a> <a href="pictures.php"> Image Gallery </a> <a href="GIFs.php"> GIF Gallery </a></nav>
        <?php
            foreach(glob("./assets/Videos/*.mp4") as $vid){
                $vidN = explode(".", $vid);
                $type = $vidN[2];
                $vidN = explode("/", $vidN[1]);
                echo "
<video class='content' controls width='400' height='250'>
<source class='content' src='assets/Videos/$vid[3].mp4' type='vid/mp4'>
</video>
";
            }
        ?>
    </body>
</html>