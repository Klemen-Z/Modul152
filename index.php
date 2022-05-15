<html lang="en">
    <head>
        <?php
            include("Header.php");
        ?>
        <title>Homepage</title>
    </head>
    <body>
        <nav class="navbar"><a href="pictures.php"> Image Gallery </a> <a href="GIFs.php"> GIF Gallery </a> <a href="videos.php"> Video gallery </a></nav>
        <img class='logo' src="Logo%20create.php" width="<?php list($width, $height) = getimagesize('assets/logos/commuFrog.jpeg'); echo $width; ?>" height="<?php echo $height;?>" alt="help" />
    </body>
</html>