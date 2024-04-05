<?php

use bucky24\PHPDatabase\Model as Model;

$DairyModel = new Model(
    "dairy", 
    array(
        "name" => array(
            "type" => "varchar",
        ),
    ),
    1,
);

$DairyModel->init();

?>