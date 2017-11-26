<?php

class Config {

    private $data;

    public function __construct() {
        $json = file_get_contents(__DIR__ . "../../../config/app.json");
        $this->data = json_decode($json, true);
    }

    public function get(string $key) {
        if(!isset($this->data[$key])) {
            throw new Exception("Key not found: " . $key);
        }
        
        return $this->data[$key];
    }
}

?>