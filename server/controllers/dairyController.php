<?php

require_once(__DIR__ . "/../models/models.php");
require_once(__DIR__ . "/../constants.php");

function getDairiesForUser($user_id) {
    global $UserRoleModel, $DairyModel;

    $roles = $UserRoleModel->search(array(
        "user_id" => $user_id,
        "role" => SUPERADMIN_ROLE,
    ));

    if (count($roles) > 0) {
        return $DairyModel->search();
    }

    throw new Error("stub");
}

?>