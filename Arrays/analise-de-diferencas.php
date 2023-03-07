<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));

/*
 * No exemplo acima temos dois arrays, e utilizamos as funções abaixo para
 * array_diff_key para validar as diferenças entre as chaves dos arays na variável alunosFaltantes
 * array_keys para listar as chaves dos arays na variável nomesAlunos
 * array_values para listar os valores dos arrays na variável notasAlunos
 */
