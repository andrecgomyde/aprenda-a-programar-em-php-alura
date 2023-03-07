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
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';

// No exemplo acima utilizamos a função array_push para acrescentar elementos no final do array

array_unshift($alunos2022, 'Stephane', 'Rafaela');

// No exemplo acima utilizamos a função array_unshift para acrescentar elementos no início do array

echo adicionar - e - remover - elementos . phparray_shift($alunos2022) . PHP_EOL;

// No exeomplo acima utilizamos a função array_shift para remover o primeiro elemento do primeiro array

echo adicionar - e - remover - elementos . phparray_pop($alunos2022) . PHP_EOL;

// No exeomplo acima utilizamos a função array_pop para acrescentar elementos no meio do array

var_dump($alunos2022);
