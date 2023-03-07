<?php

$conta1 = [
    'titular'=> 'Vinicius',
    'saldo'=>1000
];

$conta2 = [
    'titular'=> 'Maria',
    'saldo'=>10000
];

$conta3 = [
    'titular'=> 'Alberto',
    'saldo'=>300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;

}

/*
 * No exemplo acima criamos arrays associativos onde definimos chaves e para cada chave temos um valor
 * No final dos arrays criamos a variável $ContasCorrentes que junta os arrays $conta1, $conta2 e $conta3
 * Utilozamos a função for (para) para contar a quantidade de chaves do array $contasCorrentes e
 * utilizamos o echo para associar a variável $i a chave 'titular' e exibi-las
 */
