<?php

require __DIR__ . '/../vendor/autoload.php';
require_once(__DIR__ . "/utils/API.php");
require_once(__DIR__ . "/routes/home.php");

$path = null;
if (array_key_exists("path", $_REQUEST)) {
    $path = $_REQUEST['path'];
}

if (!$path) {
    $contents = file_get_contents("../client/index.html");

    $contents = str_replace("{{url}}", "http://localhost:100", $contents);

    echo $contents;
} else {
    $method = $_SERVER['REQUEST_METHOD'];
    API::processRequest($method, $path);
}
?>