<?php
require_once "config.php";


function getUrlFile($nomeCompletoDaClasse)
{
    $basePath = __DIR__ . DIRECTORY_SEPARATOR;

    $caminhoArquivo = str_replace('/', DIRECTORY_SEPARATOR, $basePath . $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace($basePath,"", $caminhoArquivo );

    return $caminhoArquivo;
}