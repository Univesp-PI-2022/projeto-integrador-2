<?php

require_once '../../autoload.php';


use src\model\Newsletter;

$email = json_decode(file_get_contents('php://input'), true);


if (isset($email['email'])) {

    $email = $email['email'];

    $email = new Newsletter($email);


    if ($email->getEmail() === false) {
        http_response_code(400);
        $response = ['status' => 'error02', 'reason' => 'Format invalid!'];
        print_r(json_encode($response, JSON_PRETTY_PRINT));
        exit;
    }

    $subscribed =  $email->subscribeNewsletter();

    if ($subscribed === false) {
        http_response_code(500);
        $response = ['status' => 'error02'];
        print_r(json_encode($response, JSON_PRETTY_PRINT));
        exit;
    } else {
        http_response_code(201);
        $response = ['status' => 'success'];
        print_r(json_encode($response, JSON_PRETTY_PRINT));
        exit;
    }
} else {
    print_r(http_response_code(400));
    $response = ['status' => 'error02'];
    print_r($response);
    exit;
}

/* 
error01 -> Valores não recebidos;
error02 -> Falha no banco de dados;
*/
