<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class GerenciarAlunoController implements IController

{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [

                "cabecalho.php",
                "contentGerenciarAluno.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "administradores"=> Usuario::all("tipo_user = 1"),
                "itens" => $_SESSION["itensMenu"]
            ]);
        Transaction::close();
    }
}