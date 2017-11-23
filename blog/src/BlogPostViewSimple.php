<?php
    require_once("common.php");
    require_once("BlogPost.php");
    require_once("BlogPostView.php");

    class BlogPostViewSimple extends BlogPostView {

        function __construct() {
        }

        function render(BlogPost $blogPost) {
            echo "<div>";
            echo $blogPost->getTitle();
            echo "</div>";
        }
    }
?>