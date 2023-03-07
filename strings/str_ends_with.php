<?php

$url = 'https://andrecgomyde.com.br';

$br = str_ends_with($url, 'br');

if ($br) {
    echo "$url é um domínio do Brasil" . PHP_EOL;
} else {
    echo "$url não é um domínio do Brasil" . PHP_EOL;
}

/*
 * No exeomplo acima utilizamos a função str_ends_with para identificar se o final
 * da variável $url contem br
 */
