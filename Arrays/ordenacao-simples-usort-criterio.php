<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 6,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 10,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 8,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);

/*
 * No exemplo acima utilizamos o operador de comparação <=> Spaceship (nave espacial) para determinar
 * qual dos valores numéricos definidos nas chaves do array notas é maior
 * e utilizamos a função usort para definir a ordenação
 */
