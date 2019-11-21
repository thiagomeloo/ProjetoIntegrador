<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;

class GerenciarProfessorController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [

                "cabecalho.php",
                "contentGerenciarProfessor.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "itens" => $_SESSION["itensMenu"]
            ]);
    }
}