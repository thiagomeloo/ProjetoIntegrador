<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;

class CadastrarDisciplinaController implements IController

{

    public function request(): void
    {

        echo Render::html(
            [

                "cabecalho.php",
                "form-store-disciplina.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "name_btn" => "Cadastrar",
                "itens" => $_SESSION["itensMenu"]
            ]);
    }
}