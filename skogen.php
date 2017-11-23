<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    echo "Välkommen till skogen<br>";

class Woodland {

    private $woodlandAnimal = "woodpecker";

    function __construct($animal) {
        $this->woodlandAnimal = $animal;
    }

    function getWoodlandAnimal() {
        return $this->woodlandAnimal;
    }

    function getAge() {
        $woodlandAnimal = 23;
    }

    function getTrees() {
        $woodlandAnimal = "Wood";
    }
}

class Plains {
    function __construct() {

    }
}

$woodlandAnimal = new Woodland("Bear");
$plainsAnimal = new Plains(true, 23, 0, true);

echo $woodlandAnimal->getWoodlandAnimal();

?>