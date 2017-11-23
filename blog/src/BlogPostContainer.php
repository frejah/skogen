<?php
    require_once("common.php");
    require_once("BlogPostView.php");

    class BlogPostContainer {
        private $allBlogPosts = [];

        function __construct() {
        }

        function addBlogPost(BlogPost $post) {
            array_push($this->allBlogPosts, $post);
        }

        function getBlogPostById(int $id) : BlogPost {
            return $this->allBlogPosts[$id];
        }

        function getNumBlogPosts() : int {
            return count($this->allBlogPosts);
        }
    }
?>