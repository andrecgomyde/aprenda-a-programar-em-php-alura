<?php

$contador = 1;

while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}

/*
 * No exemplo acima, na linha 3 definimos a variável $contador igual a 1
 * Na linha 5 utilizamos a função while (enquanto) e definimos que a variável $contador deve ser menor ou igual a 15
 * Na linha 6 utilizamos a função echo com uma string com o conteúdo # com o valor da variável $contador e por fim, o PHP_EOL para qubrar linha
 * Na linha 7 temos a variável $contador = 1 + 1 fazendo com que a cada linha ele some 1, até chegar no valor 15, definido na função while da linha 5
 * C
 */
