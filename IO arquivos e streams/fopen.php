<?php

$arquivo = fopen('arquivo-de-exemplo.txt.txt', 'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso . PHP_EOL;
}

fclose($arquivo);

/*
 * No exemplo acima utilizamos as funções abaixo para selecionar, abrir e ler o arquivo arquivo-de-exemplo.txt.txt
 * abrir um arquivo com fopen
 * fechar um arquivo com fclose
 * ler uma linha com fgets ou fread
 * ler todo o conteúdo com file_get_contents ou file
 * fopen - Abre o arquivo
 */
