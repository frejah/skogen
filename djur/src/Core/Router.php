<?php

class Router {

    private static $regexp = [
        "number" => "\d+",
        "string" => "\w"  
    ];

    public function __construct() {

    }

    public function route() : string {
        return "Djur";
    }
}

?>