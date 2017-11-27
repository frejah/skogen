<?php
    namespace Djur;

    class AllAnimalBoxes {
        private $harePost;
        private $owlPost;
        private $foxPost;

        function __construct() {
            $this->harePost = new AnimalPost("Lepus timidus", "http://kvikkjokk.nu/blogg/wp-content/uploads/2012/04/Hare-tittar.jpg");
            $this->owlPost = new AnimalPost("Bubo scandiacus", "https://pbs.twimg.com/media/AzHlCHmCQAAPHWm.jpg");
            $this->foxPost = new AnimalPost("Vulpes lagopus", "https://cdn.thinglink.me/api/image/785555472194207746/1240/10/scaletowidth");
        }

        function render() {
            $this->harePost->render();
            $this->owlPost->render();
            $this->foxPost->render();
        }

    }

?>