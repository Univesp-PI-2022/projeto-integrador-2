<?php

require_once "../../autoload.php";


use src\model\User;



if (isset($_POST['user']['name']) && isset($_POST['user']['password'])) {
    header("Location: ../view/admin.php");
    exit;
} else {
    header("Location: ../view/admin.php?status=error1");
    exit;
}
