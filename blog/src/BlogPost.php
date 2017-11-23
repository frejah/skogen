<?php
    require_once("common.php");

    class BlogPost {
        private $blogTitle = "";
        private $blogText = "";
        private $blogAuthor = "";

        function __construct() {
        }
    
        function getBlogText() : string {
            return $this->blogText;
        }

        function setBlogText(string $text) {
            $this->blogText = $text;
        }

        function getTitle() : string {
            return $this->blogTitle;
        }

        function setTitle(string $title) {
            $this->blogTitle = $title;
        }

        function getAuthor() : string {
            return $this->blogAuthor;
        }

        function setAuthor(string $author) {
            $this->blogAuthor = $author;
        }
    }
?>