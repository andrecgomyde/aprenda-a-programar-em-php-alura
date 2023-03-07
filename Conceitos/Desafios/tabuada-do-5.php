<?php

echo "Esse código tem como objetivo exibir o resultado da tabuada do número 5 com multiplicações do 0 ao 9." . PHP_EOL;

for ($i = 0; $i <= 9; $i++) {
    $multiplicacoes = $i*5;
    echo "5 x $i = $multiplicacoes";
    echo PHP_EOL;
}
