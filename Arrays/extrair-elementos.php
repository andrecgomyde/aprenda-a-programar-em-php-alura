<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];
// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados);
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));

/*
 * No exemplo acima utilizamos a função extract para pala selecionar o array
 * que queremos manipular e a função var_dump para selecionar os elementos do array
 *
 * Também utilizamos a função compact para transformar os elementos em variáveis como
 * nos casos var_names e var_name
 */
