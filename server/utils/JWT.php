<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

require_once(__DIR__ . "/../config.php");

function encodeJwt($payload) {
    $jwt = JWT::encode($payload, JWT_KEY, 'HS256');

    return $jwt;
}

function decodeJwt($token) {
    try {
        $data = JWT::decode($token, new Key(JWT_KEY, 'HS256'));

        return $data;
    } catch (Throwable $e) {
        return null;
    }
}
?>