<?php
    require_once("common.php");
    require_once("BlogPostContainer.php");
    require_once("BlogPostView.php");

    class BlogPostContainerView {

        private $container;

        function __construct(BlogPostContainer $container) {
            $this->container = $container;
        }

        function render(BlogPostView $view) {
            echo "<div class=\"mainContent\">";
            
            $numBlogPosts = $this->container->getNumBlogPosts();
            
            for($i = 0; $i < $numBlogPosts; $i++) {
                $blogPost = $this->container->getBlogPostById($i);
                $view->render($blogPost);
            }            

            echo "</div>";
        }
    }
?>