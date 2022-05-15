<html lang="en" class="dark">
    <head>
        <?php
        include("Header.php");
        ?>
        <title> Image big view</title>
    </head>
    <body class="bg-slate-50 dark:bg-gray-700 dark:text-gray-200">
        <?php include("sidebar.php") ?>
        <div class="flex ml-40 flex-wrap flex-row">
            <?php
            foreach(glob("./assets/Thumbnails/*") as $img){
                $imgN = explode("/", $img);
                $chosen = $_GET["img"];
                if($imgN[3] == $chosen){
                    echo "<div class='border-2 rounded 1/12 mx-3 my-4 px-1 py-2'><img class='my-4 mx-3' src='./assets/Images/$chosen' alt='Image Failed to Load'><p class='w-full'>Name: ".basename("./assets/Images/$chosen")."</p>
                            <br />
                           <p class='w-full' style='margin-top: -1.5vh;'>"."Size: ".(round(filesize("./assets/Images/$chosen")/1024))." Kilobytes</p></div>";
                } else {
                    echo "<div class='border-2 rounded 1/12 mx-3 my-4 px-1 py-2'><a href='bigImg.php?img=$imgN[3]'><img class='my-4 mx-3' src='$img' alt='Image Failed to Load'></a></div>";
                }
            }
            ?>
        </div>
    </body>
</html>