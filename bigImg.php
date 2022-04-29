<html lang="en">
    <head>
        <?php
        include("Header.php");
        ?>
        <title><?php echo $_GET["img"]; ?></title>
    </head>
    <body>
        <nav><a href="index.php"> Homepage </a> <a href="pictures.php"> Image Gallery </a> <a href="GIFs.php"> GIF Gallery </a> <a href="videos.php"> Video gallery </a></nav>
        <?php
        foreach(glob("./assets/Images/*") as $img){
            $imgN = explode(".", $img);
            $imgN = explode("/", $imgN[1]);
            if($imgN[3] == $_GET["img"]){
                echo "<img src='$img' alt='Image Failed to Load' style='margin-left: 50%; margin-top: 50%;'>";
            }
        }
        ?>
    </body>
</html>