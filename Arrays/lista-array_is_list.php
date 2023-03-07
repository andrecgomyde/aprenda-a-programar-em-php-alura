<?php

$array = [
    0 => 'um',
    1 => 'dois',
    3 => 'tres',
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;

var_dump(array_is_list($array));

/*
 * No exemplo acima utilizamos a função array_is_list para identificar se o array é uma lista
 * Se for uma lista, o retorno deve ser bool(true) e se não for, bool(false)
 */

