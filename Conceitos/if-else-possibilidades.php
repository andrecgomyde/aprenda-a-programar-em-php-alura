<?php

$idade = 17;

$numeroDePessoas = 2;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Obrigado!";

/*
 * No exemplo acima temos as variáveis $idade = 17 e a variável $numeroDePessoas = 2
 * Temos a função if na linha 7 para validar se a idade eé igual ou maior que 18 anos
 * Temos as funções else if na linha 9 para validar, caso a idade for menor que 18 anos
 * se a idade é igual ou maior que 16 e qual é o número de pessoas e o else da linha
 * 11 para exbibir a mensagem você não pode entrar, caso a variável $idade seja menor que
 * 16 e a variável $numeroDePessoas seja menor do que 1
 */
