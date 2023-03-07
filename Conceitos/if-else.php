<?php

$idade = 16;

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Obrigado!";

/*
 * No exemplo acima temos a função if (se) para validar se o usuário possui uma idade igual ou mair
 * que 18 anos, e a função else (outra) para ser exibida a mensagem você não pode entrar caso tenha menos
 * de 18 anos
 */
