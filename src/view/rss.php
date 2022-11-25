<?php
    require_once "../../autoload.php";

    use src\database\DatabaseCon;

    $today = new DateTime();

    if (isset($_GET['data'])) {        
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_GET['data'])) {
            $whereDate = $_GET['data'];
        } else {
            $whereDate = $today->format('Y-m-d');
        }
    }
    else {
        $whereDate = $today->format('Y-m-d');
    }

    $whereSql = "creation_date BETWEEN '" . $whereDate . " 00:00:00' AND '" . $whereDate . " 23:59:59'";
    $posts = DatabaseCon::getAll($whereSql, "creation_date DESC", null, "posts");


    $xml = new SimpleXMLElement('<rss/>');
    //$xml->addAttribute('encoding', 'UTF-8');
    $channel = xml->addChild('channel');
    $title = $channel->addChild('title', 'Praça Solidária - RSS');
    $link = $channel->addChild('link', 'https://pracasolidaria.projeto-integrador.app.br');
    $description = $channel->addChild('description', 'Somos o “Projeto Solidário sem FOME”! Somos um grupo multidisciplinar para INCLUSÃO SOCIAL!');
    
    foreach ($posts as $post) {
        $item = $channel->addChild('item');
        $title = $item->addChild('title', $post->title);
        $link = $item->addChild('link', 'https://pracasolidaria.projeto-integrador.app.br/src/view/post.php?id=' . $post->id);
        $description = $item->addChild('description', $post->content);
    
    }
    header('Content-type: text/xml');
    print($xml->asXML());
?>
