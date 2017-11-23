<?php

    class BlogPostViewNiceLooking extends BlogPostView {

        function __construct() {
        }

        function render(BlogPost $blogPost) {
            echo "<div>";
            echo $blogPost->getTitle();
            echo "</div>";
        }
    }

?>