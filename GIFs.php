<html lang="en" class="dark">
    <head>
        <?php
        include("Header.php");
        ?>
        <title>GIF Gallery</title>
    </head>
    <body class="bg-slate-50 dark:bg-gray-700 dark:text-gray-200">
    <?php include("sidebar.php") ?>
    <div class="flex ml-40 flex-wrap flex-row">
        <?php
            foreach(glob("./assets/GIFs/*.gif") as $gif){
                echo "<div class='border-2 rounded 1/12 mx-3 my-4 px-1 py-2'><img class='mr-3 ml-3' src='$gif' width='400px' height='auto' alt='GIF Failed to Load'><div class='bottom-0'><p class='w-full'>Name: ".basename($gif)."</p><br /><p class='w-full' style='margin-top: -1.5vh;'>"."Size: ".(round(filesize($gif)/1024))." Kilobytes</p></div></div>";
            }
        ?>
    </div>
    </body>
</html>