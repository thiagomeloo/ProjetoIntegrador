<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;

class CadastrarAdminController implements IController

{

    public function request(): void
    {

        echo Render::html(
            [

                "cabecalho.php",
                "form-cadastrar-admin.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "itens" => $_SESSION["itensMenu"]
            ]);
    }
}