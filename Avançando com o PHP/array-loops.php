<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

/*
 * No exemplo acima temos o array idadeList com alguns valores
 * Utilizamos a funçaão for (para) para criar uma interação, onde a variável $i é
 * equivalente a zero, em seguida definimos que se a variável $i for menor que a função
 * count (contar a quantidade de valores do array), a variável $i irá se multiplicar
 * No final temos um echo para variável $i exibir a quantidade de valores do array
 */
