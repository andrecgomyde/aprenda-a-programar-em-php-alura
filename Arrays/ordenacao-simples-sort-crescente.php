<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

sort($notas);
var_dump($notas);

/*
 * No exemplo acima temos um array com as notas de alguns alunos
 * A função sort faz com que as chaves do array sejam ordenadas de acordo com os seus valores, de forma crescente
 */
