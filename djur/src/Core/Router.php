<?php

    namespace Djur\Core;

    class Router {

        // -- PHP - MySQL Join & Introduktion till MVC
        private $routeMap;

        private static $regexp = [
            "number" => "\d+",
            "string" => "\w"  
        ];

        public function __construct() {
            $json = file_get_contents(__DIR__ . "/../../config/routes.json");
            $this->routeMap = json_decode($json, true);
        }

        public function route() : string {
            return "Djur";
        }

        public function executeController(
            string $route,
            string $path,
            array $info,
            Request $request
        ) : string {
            $controllerName = "Djur\\" . $info["controller"];
            $controller = new $controllerName($request);

            $params = $this->extractParams($route, $path);

            return call_user_func_array([$controller, $info["method"]], $params);
        }

        private function getRegexRoute(string $route, array $info) : string {
            return $route;
        }

        public function extractParams(string $route, string $path) : array {
            $params = [];
            
            $routeParts = explode("/", $route);
            $pathParts = explode("/", $path);

            foreach($routeParts as $key => $routePart) {
                if(strpos($routePart, ":") === 0) {
                    $name = substr($routePart, 1);
                    $params[$name] = $pathParts[$key + 1];
                }
            }

            return $params;
        }
    }

?>