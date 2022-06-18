<?php

require_once "../../autoload.php";


use src\model\User;

if (isset($_POST['user']['name'], $_POST['user']['email'], $_POST['user']['password'])) {
    $nameUser = $_POST['user']['name'];
    $nameEmail = $_POST['user']['email'];
    $namePassword = $_POST['user']['password'];
    $user = new User($nameUser, $nameEmail, $namePassword);

    $registered =  $user->registerUser();


    if ($registered === false) {
        header("Location: ../view/admin.php?status=error02");
        exit;
    } else {
        header("Location: ../view/admin.php?status=success");
        exit;
    }
} else {
    header("Location: ../view/admin.php?status=error01");
    exit;
}
