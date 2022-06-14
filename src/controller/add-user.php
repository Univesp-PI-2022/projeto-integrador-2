<?php

require_once "../../autoload.php";


use src\model\User;



echo"<pre>";
var_dump($_POST);
echo"</pre>";
exit;

if (isset($_POST['nome'], $_POST['sobrenome'], $_POST['telefone-primario'])) {
    $emails = [$_POST['email-primario']];
    if (isset($_POST['email-secundario']) && strlen($_POST['email-secundario'])) array_push($emails, $_POST['email-secundario']);
    $telefones = [$_POST['telefone-primario']];
    if (isset($_POST['telefone-secundario']) && strlen($_POST['telefone-secundario'])) array_push($telefones, $_POST['telefone-secundario']);

    $user = new user($_POST['nome'], $_POST['sobrenome'], $_POST['cpf'], $emails, $telefones);

    if (!$user->getEmails() && strlen($_POST['email-primario']) > 5) {
        header("Location: ../view/view-add.php?status=error-invalid-email");
        exit;
    }
    if (!$user->getPhones() && strlen($_POST['telefone-primario']) > 12) {
        header("Location: ../view/view-add.php?status=error-invalid-phone");
        exit;
    }
    if (!$user->getCpf() && strlen($_POST['cpf']) > 1) {
        header("Location: ../view/view-add.php?status=error-invalid-cpf");
        exit;
    }
   
    $user->registerUser();

    if ($user) {
        header("Location: ../view/view-add.php?status=success-add-user");
        exit;
    } else {
        header("Location: ../view/view-add.php?status=error-add-user");
        exit;
    }
} else {
    header("Location: ../view/view-add.php?status=error-add");
    exit;
}
