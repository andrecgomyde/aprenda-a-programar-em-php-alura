<?php

$arquivo = fopen('lista-cursos.txt', 'r');

$tamanhoDoArquivo = filesize('lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);

/*
 * No exemplo acima utilizamos as funções abaixo para selecionar, abrir e ler o arquivo arquivo-de-exemplo.txt.txt
 * abrir um arquivo com fopen
 * fechar um arquivo com fclose
 * ler uma linha com fgets ou fread
 * ler todo o conteúdo com file_get_contents ou file
 * fopen - Abre o arquivo
 */
