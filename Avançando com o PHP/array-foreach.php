<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678912 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}

/*
 * No exemplo acima temos o array $contasCorrentes e dentro dele temos três chaves e duas chaves dentro de cada
 * Utilizamos a função foreach (para cada) para definir que o array $contasCorrentes é equivalente a variável
 * $cpf e indicamos que a variável $cpf deve ser => (igual ou menor) que a variável conta que por padrão
 * deve exibir o valor da primeira chave, equivalente ao indicador 0
 */
