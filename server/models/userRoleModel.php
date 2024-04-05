<?php

use bucky24\PHPDatabase\Model as Model;

$UserRoleModel = new Model(
    "user_role", 
    array(
        "user_id" => array(
            "type" => "integer",
        ),
        "role" => array(
            "type" => "varchar",
        ),
    ),
    1,
);

$UserRoleModel->init();

?>