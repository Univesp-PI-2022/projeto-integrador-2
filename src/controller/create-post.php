<?php

require_once '../../autoload.php';


use src\model\Post;


if (isset($_POST['post']['title'], $_POST['post']['content'])) {


    $title = $_POST['post']['title'];
    $content = $_POST['post']['content'];
    $image = $_FILES['image'];



    if ($image !== false) {
        $img = file_get_contents($image['tmp_name']);
        $img64 = base64_encode($img);
        $imageFileType = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
        $imgData = 'data:image/' . $imageFileType . ';base64,' . $img64;
    } else {
        $imgData = null;
    }


    $post = new Post($title, $content, $imgData);


     if ($post->getTitle() === false || $post->getContent() === false || $post->getImage() === false) {
        http_response_code(400);
        $response = ['status' => 'error02', 'reason' => 'Format invalid!'];
        print_r(json_encode($response, JSON_PRETTY_PRINT));
        exit;
    }

    $created =  $post->createPost();

    if ($created === false) {
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
    http_response_code(400);
    $response = ['status' => 'error02'];
    print_r($response);
    exit;
}

/* 
error01 -> Valores não recebidos;
error02 -> Falha no banco de dados;
*/
