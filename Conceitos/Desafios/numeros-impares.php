<?php

echo "Esse código tem como objetivo listar os números ímpares de 0 a 100." . PHP_EOL;

for ($numerosImpares = 0; $numerosImpares <= 100; $numerosImpares ++) {
    if ($numerosImpares % 2 == 1)
        echo "#$numerosImpares" . PHP_EOL;
}
