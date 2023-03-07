<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

// Neste arquivo definimos três funções que podem ser utilizadas em outros arquivos deste projeto

/*
 *
 * sacar para possibilitar que um valor seja subtraído da variável $conta
 * exibeMensagem que deve exibir a string mensagem caso o valor seja => do que o valor da variável $conta
 * depositar possibilita somar um valor a variável $conta
 */
