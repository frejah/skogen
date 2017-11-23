<?php
    require_once("./src/common.php");

    require_once("./src/BlogPostViewSimple.php");
    require_once("./src/BlogPostViewAdvanced.php");
    require_once("./src/BlogPostViewNiceLooking.php");
    require_once("./src/BlogPostContainer.php");
    require_once("./src/BlogPostContainerFactory.php");
    require_once("./src/BlogPostContainerView.php");

    require_once("./src/MainMenu.php");

    
    $blogPostView = new BlogPostViewAdvanced();
    $blogPostView->setCssClass("frejaPost");
    
    $factory = new BlogPostContainerFactory();

    $blogPostContainer = $factory->createContainer();
    $blogPostContainerView = new BlogPostContainerView($blogPostContainer);

    $menuItem1 = new MainMenuItem("Hem", "index.php");
    $menuItem2 = new MainMenuItem("Om Skogen", "omskogen.php");
    $menuItem3 = new MainMenuItem("Köp Ved", "kopved.php");
    $menuItem4 = new MainMenuItem("Leif i Skogen", "leif.php");
    $menuItem5 = new MainMenuItem("Kontakt", "kontakt.php");

    $menuDivider =new MainMenuDivider();

    $mainMenu = new MainMenu();
    $mainMenu->addItem($menuItem1);
    $mainMenu->addItem($menuItem2);
    $mainMenu->addItem($menuItem3);
    $mainMenu->addItem($menuItem4);
    $mainMenu->addItem($menuItem5);
    $mainMenu->addItem($menuDivider);
    $mainMenu->createMenuItemsFromBlogPosts($blogPostContainer);
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">

        <title>Skogen</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>

    <body>
        <header>
            
        </header>
    
        <main>
            <div class="mainContainer">
                <?php
                    $mainMenu->render();
                    $blogPostContainerView->render($blogPostView);
                ?>
            </div>

            
        </main>

        <footer>
            
        </footer>
    </body>
</html>