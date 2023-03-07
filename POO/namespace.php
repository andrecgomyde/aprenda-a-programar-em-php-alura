<?php

namespace Alura\Banco\Conta;

use Alura\Banco\{CPF, Endereco};
use \SplFileInfo;

class Conta
{
    public function umMetodoQualquer()
    {
        // ...
        $cpf = new CPF();
        // ...
        $cpf = new Endereco();
        // ...
        $fileInfo = new SplFileInfo();
        // ...
        $fileObject = new \SplFileObject();
        // ...
    }
}

// No exeomplo acima adicionamos o namespace Alura\Banco\Conta para herdar as classes definidas no método use
