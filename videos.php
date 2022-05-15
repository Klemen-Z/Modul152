<html lang="en" class="dark">
    <head>
        <?php
        include("Header.php");
        ?>
        <title>Video Gallery</title>
    </head>
    <body class="bg-slate-50 dark:bg-gray-700 dark:text-gray-200">
    <?php include("sidebar.php") ?>
    <div class="flex ml-40 flex-wrap flex-row">
        <?php
            foreach(glob("./assets/Videos/*.mp4") as $vid){
                echo "
<div class='border-2 rounded 1/12 mx-3 my-4 px-1 py-2'><video controls width='400' height='250'>
<source src='$vid' type='video/mp4'>
</video></div>
";
            }
        ?>
    </div>
    </body>
</html>