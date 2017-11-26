<?php
    require_once("./src/common.php");
    require_once("./src/Header.php");
    require_once("./src/Menu.php");
    require_once("./src/AllAnimalBoxes.php");  
    require_once("./src/Footer.php");

    $header = new Header();
    $menu = new Menu();
    $animalPosts = new AllAnimalBoxes();
    $footer = new Footer();
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">

        <title>Djuren</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/menu.css">

    </head>

    <body>
        
        <?php
            $header->render();
            $menu->render();
        ?>
    
        <main class="mainContainer">
            <div class="mainSidebar">
                Sidebar
            </div>

            <div class="mainContent">
               <?php $animalPosts->render(); ?>
            </div>

            <div class="mainSidebar">
                Sidebar
            </div>

        </main>

        <?php $footer->render(); ?>
    </body>
</html>