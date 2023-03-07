<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];

var_dump($alunos2022);

/*
 * No exemplo acima utilizamos o operador ... (pread operator ou unpacking operator) para
 * juntar os valores dos arrays em uma única variável e incluímos uma string entre elas
 */
