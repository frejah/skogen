<?php
    require_once("common.php");
    require_once("BlogPost.php");
    require_once("BlogPostView.php");

    class BlogPostViewAdvanced extends BlogPostView {
        private $cssClass;

        function __construct() {
        }
        
        function render(BlogPost $blogPost) {
            echo "<div class=\"" . $this->cssClass . "\">";
            echo "<h1>" . $blogPost->getTitle() . "</h1>";
            echo "<i>" . $blogPost->getBlogText() . "</i>";
            echo "<br>";
            echo "<b>Skrivet av: " . $blogPost->getAuthor() . "</b>";
            echo "</div>";
        }

        function setCssClass(string $css) {
            $this->cssClass = $css;
        }
    }
?>