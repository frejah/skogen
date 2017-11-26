<?php
    require_once("../src/common.php");
    require_once("../src/Utils/Config.php");

    echo "<hr><h2>Config</h2>";
    
    $config = new Config();
    var_dump($config->get("boat"));
    var_dump($config->get("port"));

?>