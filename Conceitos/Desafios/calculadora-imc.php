<?php

echo "O objetivo deste código é aplicar a fórmula IMC, dividindo o peso pela altura ao quadrado." . PHP_EOL;

// preencha abaixo o peso em kilogramas
$kg = 94;

echo "O peso é $kg kilos." . PHP_EOL;

// preencha abaixo a altura em centímetros
$cm = 1.80;

echo "A altura é $cm metros." . PHP_EOL;

$resultado = $kg / $cm ** 2;

echo "O resultado IMC é $resultado" . PHP_EOL;


if ($resultado < 18){
    echo"IMC Abaixo do recomendado.";
}elseif($resultado >= 18 AND $resultado < 25){
    echo"IMC Dentro do recomendado.";
}else {
    echo"IMC Acima do recomendado.";
}
