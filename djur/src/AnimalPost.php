<?php

class AnimalPost {
    private $animalPicture;
    private $speciesName;

    function __construct($latinName, $imgUrl) {
        $this->animalPicture = $imgUrl;
        $this->speciesName = $latinName;
    }

    function render() {
        echo "<div class = \"itemBox\">";
        echo "<img src=\"" . $this->animalPicture . "\"><br>";
        echo "<i>" . $this->speciesName . "</i>";
        echo "</div>";
    }


}

?>