<?php
    require_once("common.php");

    class MainMenu {
        private $menuItems = [];

        function __construct() {
        }

        function createMenuItemsFromBlogPosts(BlogPostContainer $container) {
            $numBlogPosts = $container->getNumBlogPosts();
            
            for($i = 0; $i < $numBlogPosts; $i++) {
                $blogPost = $container->getBlogPostById($i);

                $menuItem = new MainMenuBlogPostItem($blogPost);
                $this->addItem($menuItem);
            }
        }

        function render() {
            echo "<div class=\"mainMenu\">";
            echo      "MENU";
            echo "<ul>";
            
            foreach($this->menuItems as $item) {
                $item->render();
            }
            
            echo "</ul>";
            echo  "</div>";
        }

        function addItem(MainMenuItem $item) {
            array_push($this->menuItems, $item);
        }

    }

    class MainMenuItem {
        private $topics = "";
        private $menuLink = "";

        function __construct(string $topic, string $link) {
            $this->topics = $topic;
            $this->menuLink = $link;
        }

        function getTopic() : string {
            return $this->topics;
        }

        function getLink() : string {
            return $this->menuLink;
        }

        function render() {
            echo "<li>";
            echo "<a href=\"" . $this->menuLink . "\">";
            echo $this->topics;
            echo "</a>";
            echo "</li>";
        }
    }

    class MainMenuDivider extends MainMenuItem {

        function __construct() {
        }

        function render() {
            echo "<hr>";
        }
    }

    class MainMenuBlogPostItem extends MainMenuItem {
        
        private $blogPost;

        function __construct(BlogPost $post) {
            $this->blogPost = $post;
        }

        function render() {
            echo "<li>";
            echo "<a href=\"index.php\">";
            echo $this->blogPost->getTitle();
            echo "</a>";
            echo "</li>";
        }
    }

?>