<?php

class Leif {

    private $fistShake;
    private $unique_id;

    private static $leifCounter = 0;

    function __construct() {
        $this->fistShake = 0;
        $this->unique_id = self::$leifCounter++;
    }

    function printAngryOutbursts() {
        echo "[" . $this->unique_id . "] Hytter med näven #" . $this->fistShake . "<br>";

        $this->fistShake++;
    }
}

$leifNumeroUno = new Leif();
$leifNumeroUno->printAngryOutbursts();
$leifNumeroUno->printAngryOutbursts();

$leifWannabe = new Leif();
$leifWannabe->printAngryOutbursts();
$leifWannabe->printAngryOutbursts();

$leif = new Leif();
$leif->printAngryOutbursts();

?>