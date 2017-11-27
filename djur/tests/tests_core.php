<?php
    require_once("../common.php");

    use Djur\Core\Request;
    use Djur\Core\FilteredMap;
    use Djur\Core\Router;

    echo "<h2>Request</h2>";

    $request = new Request();
    var_dump($request->getUrl());
    var_dump($request->getDomain());
    var_dump($request->getPath());
    var_dump($request->getMethod());
    var_dump($request->isPost());
    var_dump($request->isGet());
    var_dump($request->getParams());
    var_dump($request->getCookies());


    echo "<hr><h2>FilteredMap</h2>";
    
    $mapArray = [
        "user" => "Freja",
        "host" => "my_host",
        "url" => "localhost:8080/djur/",
        "port" => 8080
    ];

    $map = new FilteredMap($mapArray);
    var_dump($map->has("user"));
    var_dump($map->has("leif"));
    var_dump($map->get("port"));
    var_dump($map->get("leif"));
    var_dump($map->getInt("port"));
    var_dump($map->getNumber("port"));
    var_dump($map->getNumber("url"));
    var_dump($map->getString("url"));

    echo "<hr><h2>Router</h2>";

    $router = new Router();
    var_dump($router->route());

    var_dump($router->extractParams("djur/:name", "/djur/hare"));
    var_dump($router->executeController(
        "",
        "",
        ["controller" => "AllAnimalBoxes", "method" => "render"],
        new Request()
    ));

    echo "<hr><br>";

?>