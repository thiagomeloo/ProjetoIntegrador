<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class GerenciarAdminController implements IController

{

    public function request(): void
    {

        echo Render::html(
            [

                "cabecalho.php",
                "navGerenciarAdmin.php",
                "form-cadastrar-admin.php",
                "rodape.php"

            ],
            [
                "titulo"=>"Login",
                "itens" => $_SESSION["itensMenu"]
            ]);
    }
}