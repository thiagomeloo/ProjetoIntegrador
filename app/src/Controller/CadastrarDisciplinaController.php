<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class CadastrarDisciplinaController implements IController

{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [

                "cabecalho.php",
                "form-store-disciplina.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "turma" => Turma::download(),
                "professores" => Usuario::all("tipo_user = 2"),
                "name_btn" => "Cadastrar",
                "itens" => $_SESSION["itensMenu"]
            ]);

        Transaction::close();
    }
}