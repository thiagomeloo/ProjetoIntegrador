<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;

class GerenciarTurmaController implements IController
{

    public function request(): void
    {

        echo Render::html(
            [

                "cabecalho.php",
                "contentGerenciarTurma.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "itens" => $_SESSION["itensMenu"]
            ]);

    }

}