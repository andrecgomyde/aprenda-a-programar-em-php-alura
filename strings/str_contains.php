<?php

$nome = 'André Gomyde';

$sobrenome = str_contains($nome, 'Gomyde');

if ($sobrenome) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é a minha família" . PHP_EOL;
}

/*
 * No exeomplo acima utilizamos a função str_contains para identificar se a
 * palavra Gomyde faz parte da string da variável nome
 */
