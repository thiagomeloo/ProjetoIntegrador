<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class GerenciarTurmaController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [

                "cabecalho.php",
                "contentGerenciarTurma.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "turmas" => Turma::all(),
                "itens" => $_SESSION["itensMenu"],
                "qtdTurma" => 10
            ]);
        Transaction::close();
    }

}