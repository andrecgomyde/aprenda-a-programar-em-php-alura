<?php

$idade = 29;

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}

/*
 *No exemplo acima criamos a variavel de idade, a função echo para exibir a mensagem informando que
 * o usuário só pode entrar se tiver a partir de 18 anos e a função if para definir que o valor
 * da variável idade deve ser igual ou maior que 18
 * Caso o valor da variável seja menor do que 18 as funções echo das linhas 8 e 9 não serão exibidas
 */

/*
 * Podemos conferir todos os operadores de procedência que podem ser uilizados na função if no site PHP em Operators Precedence
 * https://www.php.net/manual/en/language.operators.precedence.php
 */
