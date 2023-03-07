<?php

$idade = 29;

echo "Olá Mundo! \n";
echo "Eu tenho $idade anos. \n";

// No exemplo acima utilizamos o caractere especíal \n para usar a função escape e pular uma linha

echo "Olá Mundo!" .PHP_EOL;
echo "Eu tenho $idade anos." .PHP_EOL;

// No exemplo acima utilizamos a constante .PHP_EOL (PHP END OF LINE) para pular uma linha

echo "Olá Mundo!" .PHP_EOL;
echo "\t Eu tenho $idade anos.";

// No exemplo acima utilizamos o caractere especíal \t para usar a função tab e espaçar o início da frase

/*
 * Todos os caracteres especíais estão disponíveis na documentação de string do site PHP, em Escaped characters
 * https://www.php.net/manual/en/language.types.string.php
 */
