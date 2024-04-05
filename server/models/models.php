<?php

use bucky24\PHPDatabase\Model as Model;

require_once(__DIR__ . "/../config.php");

Model::connect(DB_URL, DB_USER, DB_PASS, DB_DB);

require_once(__DIR__ . "/userModel.php");
require_once(__DIR__ . "/dairyModel.php");
require_once(__DIR__ . "/userRoleModel.php");

?>