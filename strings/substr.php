<?php

$email = 'andrecgomyde@gmail.com';

echo substr ($email, 0, 12) . PHP_EOL;

echo substr ($email, 13);

/* No exemplo acima utilizamos a função substr na linha 5 para extrair os 12 primeiros
 * caracteresda string da variável $email
 *
 * Na linha 7 utilizamos novamente a função substr para extrair todos os caracteres
 * a partir do caractere na posição 13
*/
