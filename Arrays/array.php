<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;

/*
 * No exemplo acima temos um array de chaves, onde cada chave armazena um valor
 * e utilizamos as funções foreach e echo para listar o array e exibir os seus resultados
 * e a função count para exibir a quantidade de chaves existentes em nosso array
 */
