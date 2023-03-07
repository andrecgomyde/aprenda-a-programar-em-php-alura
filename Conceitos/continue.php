<?php

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        continue;
    }
    echo "#$contador" . PHP_EOL;
}

/*
 * No exemplo acima, utilizamos a instrução continue (continuar) para seguir executando o looping do contador
 * até um número <= (maior ou igual) a 15, pulando apenas o número 13
 */
