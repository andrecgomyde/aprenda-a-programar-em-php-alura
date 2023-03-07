<?php

$url = 'https://andrecgomyde.com';

$protocoloHttps = str_starts_with($url, 'https');

if ($protocoloHttps) {
    echo "$url é uma URL segura" . PHP_EOL;
} else {
    echo "$url não é uma URL segura" . PHP_EOL;
}

/*
 * No exeomplo acima utilizamos a função str_starts_with para identificar se o início
 * da variável $url contem https
 */
