<?php

require __DIR__ . '/../vendor/autoload.php';
require_once(__DIR__ . "/config.php");

require_once(__DIR__ . "/models/models.php");

require_once(__DIR__ . "/utils/API.php");
require_once(__DIR__ . "/routes/home.php");

$path = null;
if (array_key_exists("path", $_REQUEST)) {
    $path = $_REQUEST['path'];
}

if (!$path) {
    API::getStatic("/auth");
} else {
    $method = $_SERVER['REQUEST_METHOD'];
    API::processRequest($method, $path);
}
?>