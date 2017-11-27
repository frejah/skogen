<?php

    namespace Djur\Core;

    class Request {

        const POST = "POST";
        const GET = "GET";
        
        private $domain;
        private $path;
        private $method;

        private $paramas;
        private $cookies;

        public function __construct() {

            $this->domain = $_SERVER["HTTP_HOST"];
            $this->path = explode("?", $_SERVER["REQUEST_URI"]) [0];
            $this->method = $_SERVER["REQUEST_METHOD"];
            $this->params = new FilteredMap(
                array_merge($_POST, $_GET)
            );
            $this->cookies = new FilteredMap($_COOKIE);
        }

        public function getParams(): FilteredMap {
            return $this->params;
        }

        public function getCookies(): FilteredMap {
            return $this->cookies;
        }

        public function getUrl() : string {
            return $this->domain . $this->path;
        }

        public function getDomain(): string {
        return $this->domain;
        }

        public function getPath(): string {
            return $this->path;
        }

        public function getMethod(): string {
            return $this->method;
        }

        public function isPost(): bool {
            return $this->method === self::POST;
        }

        public function isGet(): bool{
            return $this->method === self::GET;
        }
    }

?>