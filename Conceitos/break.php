<?php

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        break;
    }
    echo "#$contador" . PHP_EOL;
}

/*
 * No exemplo acima, utilizamos a instrução break (quebrar) para interromper o looping do contador
 * até um número <= (maior ou igual) a 15
 */
