<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class GerenciarAdminController implements IController

{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [

                "cabecalho.php",
                "contentGerenciarAdmin.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "administradores"=> Usuario::all("tipo_user = 1"),
                "itens" => $_SESSION["itensMenu"],
                "qtdAdmAtivo" => Usuario::count("tipo_user = 1 and status_user = 1"),
                "qtdAdmInativo" => Usuario::count("tipo_user = 1 and status_user != 1"),
                "qtdAdmTotal" => Usuario::count()
            ]);
        Transaction::close();
    }
}