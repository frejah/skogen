<?php
    require_once("../common.php");
    
    use Djur\Utils\Config;

    echo "<hr><h2>Config</h2>";
    
    $config = new Config();
    var_dump($config->get("boat"));
    var_dump($config->get("port"));

?>