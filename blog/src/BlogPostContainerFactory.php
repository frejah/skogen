<?php
    require_once("common.php");
    require_once("./src/BlogPostContainer.php");

    class BlogPostContainerFactory {
        function __construct() {
        }

        function createContainer() : BlogPostContainer {

            $blogPost = new BlogPost();
            $blogPost->setTitle("Leif surar i skogen");
            $blogPost->setBlogText("Så jäkla sur Leif");
            $blogPost->setAuthor("Leif");

            $blogPost2 = new BlogPost();
            $blogPost2->setTitle("Leif lackar ur på vädret");
            $blogPost2->setBlogText("Nu regnar det igen - Leif är missnöjd");
            $blogPost2->setAuthor("Leif");

            $blogPost3 = new BlogPost();
            $blogPost3->setTitle("Leif är inte nöjd med mörkret");
            $blogPost3->setBlogText("Å IKEA har slut på dom förbannade värmeljusen");
            $blogPost3->setAuthor("Leif");

            $blogPost4 = new BlogPost();
            $blogPost4->setTitle("Kylan driver Leif till vansinne");
            $blogPost4->setBlogText("Han har trasiga långkalsonger");
            $blogPost4->setAuthor("Leif");

            $container = new BlogPostContainer();

            $container->addBlogPost($blogPost);
            $container->addBlogPost($blogPost2);
            $container->addBlogPost($blogPost3);
            $container->addBlogPost($blogPost4);

            return $container;
        }
    }


?>