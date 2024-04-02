<?php

use bucky24\PHPDatabase\Model as Model;

$UserModel = new Model(
    "user", 
    array(
        "username" => array(
            "type" => "varchar",
        ),
        "password" => array(
            "type" => "varchar",
        ),
    ),
    1,
);

$UserModel->init();

?>