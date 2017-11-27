<?php

    function autoloader($className) {
        $lastSlash = strpos($className, "\\") + 1;
        $className = substr($className, $lastSlash);
        $dir = str_replace("\\", "/", $className);
        $fileName = __DIR__ . "/src/" . $dir . ".php";
        
        require_once($fileName);
    }

    spl_autoload_register("autoloader");

?>