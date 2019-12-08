<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class CadastrarAlunoController implements IController

{

    public function request(): void
    {

        Transaction::open();

        echo Render::html(
            [

                "cabecalho.php",
                "form-store-usuario.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "name_btn" => "Cadastrar",
                "itens" => $_SESSION["itensMenu"],
                "tpUser" => 3,
                "turmas" => Turma::all()
            ]);

        Transaction::close();
    }
}