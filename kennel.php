<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    class Dog {
        private $dogName;
        private $dogAge;

        function __construct($name, $age) {
            $this->dogName = $name;
            $this->dogAge = $age;
        }

        function getName() {
            return $this->dogName;
        }

        function getAge() {
            return $this->dogAge;
        }

        function fetchStick() {
            if($this->getAge() < 5) {
                echo "[" . $this->getName() . "]: Runs happily and fetches the stick<br>";
            } else {
                echo "[" . $this->getName() . "]: Slowly walks and picks up the stick<br>";
            }
        }
    }

    class Kennel {
        private $kennelName;
        private $kennelDogs;

        function __construct($name) {
            $this->kennelName = $name;
            $this->kennelDogs = [];
        }

        function getKennelName() {
            return $this->kennelName;
        }

        function addDog($dog) {
            array_push($this->kennelDogs, $dog);
            
            echo "[" . $this->kennelName . "]: " . $dog->getName() . " has joined<br>";
        }

        function peeBreak() {
            foreach($this->kennelDogs as $dog) {
                echo "[" . $this->kennelName . "]: " . $dog->getName() . " takes a wee.<br>";
            }
        }

        function takeWalk() {
            foreach($this->kennelDogs as $dog) {
                if($dog->getAge() < 5) {
                    echo "[" . $this->kennelName . "]: " . $dog->getName() . " goes on a walk.<br>";
                } else {
                    echo "[" . $this->kennelName . "]: " . $dog->getName() . " sits down and won't walk - is tired.<br>";
                }
            }
        }

        function fetchStick() {
            foreach($this->kennelDogs as $dog) {
                $dog->fetchStick();
            }
        }
    }

    $dogKeyla = new Dog("Keyla", 3);
    $dogFloki = new Dog("Flóki", 2);
    $dogBanana = new Dog("Banana", 12);
    $dogSvante = new Dog("Svante", 5);
    $dogLaika = new Dog("Laika", 6);

    $kennelOstanvik = new Kennel("Kennel Östanvik");
    $kennelJehander = new Kennel("Kennel Jehander");
    
    $kennelOstanvik->addDog($dogFloki);
    $kennelOstanvik->addDog($dogBanana);
    $kennelOstanvik->addDog($dogLaika);

    $kennelJehander->addDog($dogKeyla);
    $kennelJehander->addDog($dogSvante);

    echo "------------------------------------------------------------------<br>";
    $kennelOstanvik->peeBreak();
    echo "------------------------------------------------------------------<br>";
    $kennelJehander->peeBreak();
    echo "------------------------------------------------------------------<br>";

    $kennelOstanvik->takeWalk();
    echo "------------------------------------------------------------------<br>";
    $kennelJehander->takeWalk();
    echo "------------------------------------------------------------------<br>";

    $dogFloki->fetchStick();
    $kennelOstanvik->fetchStick();

    function printDog($dog) {
        echo $dog->getName();
        echo "<br>";
        echo $dog->getAge();
        echo "<br>";
    }

    function prettyPrintDog($dog) {
        echo "My dog " . $dog->getName() . " is " . $dog->getAge() . " years old.<br>";
    }

    // printDog($dogKeyla);
    // printDog($dogFloki);
    // printDog($dogBanana);









?>