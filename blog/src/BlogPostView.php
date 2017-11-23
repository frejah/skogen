<?php
    require_once("common.php");

    abstract class BlogPostView {
        abstract function render(BlogPost $blogPost);
    }
?>