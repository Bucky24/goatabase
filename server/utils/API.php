<?php

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

        $result = self::$handlers[$method][$realPath]();

        echo $result;
    }
}

?>