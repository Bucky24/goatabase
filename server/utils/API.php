<?php

require_once(__DIR__ . "/JWT.php");

class API {
    private static $handlers = array(
        "GET" => array(),
        "POST" => array(),
        "PUT" => array(),
        "DELETE" => array(),
    );

    public static function handle($method, $path, $callback) {
        if (!array_key_exists($method, self::$handlers)) {
            throw new Error("Bad method");
        }

        self::$handlers[$method][$path] = $callback;
    }

    public static function processRequest($method, $path) {
        $realPath = "/$path";
        if (!array_key_exists($method, self::$handlers)) {
            throw new Error("Bad method");
        }

        if (!array_key_exists($realPath, self::$handlers[$method])) {
            http_response_code(404);
            die();
        }

        $params = $_REQUEST;
        unset($params['path']);

        $result = self::$handlers[$method][$realPath]();

        echo $result;
    }

    public static function getParam($paramName, $default = null) {
        if (!array_key_exists($paramName, $_REQUEST)) {
            return $default;
        }

        return $_REQUEST[$paramName];
    }

    public static function getStatic($path) {
        if ($path[0] === "/") {
            $fullPath = BASE_URL . "$path";
        } else {
            $fullPath = BASE_URL . "/$path";
        }

        $contents = file_get_contents("../client/index.html");

        $contents = str_replace("{{url}}", $fullPath, $contents);
    
        echo $contents;
    }

    public static function getAuthed() {
        if (!array_key_exists("session", $_COOKIE)) {
            return null;
        }

        $session = $_COOKIE['session'];

        $data = decodeJwt($session);

        return $data->user_id;
    }
}

?>