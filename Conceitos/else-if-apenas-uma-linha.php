<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else
    echo "Você só tem $idade anos. Você não pode entrar";
echo PHP_EOL . "É uma pena.";

echo PHP_EOL;
echo "Obrigado!";

/*
 * O trecho "É uma pena." não deveria ter sido executado, certo?
 * Quando temos uma estrutura de decisão (if, else if e else) que delimita um
 * bloco, e o código nesse bloco é composto de uma única linha de instrução, não precisamos utilizar as chaves.
 * Isso porque o PHP entende que a instrução que vem logo após a condicional (if, else if ou else) faz parte
 * dela, e todo o resto não
 *
 * Ou seja, se removermos a linha echo PHP_EOL . "É uma pena";, o código voltará a funcionar corretamente.
 */
