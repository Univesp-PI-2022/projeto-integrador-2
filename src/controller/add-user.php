<?php

require_once "../../autoload.php";


use src\model\User;

if (isset($_POST['user']['name'], $_POST['user']['email'], $_POST['password'])) {
    $nameUser = $_POST['user']['name'];
    $nameEmail = $_POST['user']['email'];
    $namePassword = $_POST['user']['password'];
    $user = new User($nameUser, $nameEmail, $namePassword);
    
} else {
    header("Location: ../view/admin.php?status=error-add");
    exit;
}
