<html lang="en" class="dark">
    <head>
        <?php
        include("Header.php");
        ?>
        <title>Image Gallery</title>
    </head>
    <body class="bg-slate-50 dark:bg-gray-700 dark:text-gray-200">
        <?php include("sidebar.php") ?>
        <div class="flex ml-40 flex-wrap flex-row">
            <?php
                include("copy.php");
                foreach(glob("./assets/Thumbnails/*") as $img){
                    $imgN = explode("/", $img);
                    echo "<div class='border-2 rounded 1/12 mx-3 my-4 px-1 py-2'><a href='bigImg.php?img=$imgN[3]'><img class='my-4 mx-3' src='$img' alt='Image Failed to Load'></a></div>";
                }
            ?>
        </div>
    </body>
</html>