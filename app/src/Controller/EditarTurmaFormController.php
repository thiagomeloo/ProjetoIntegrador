<?php


namespace Ifnc\Tads\Controller;



use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use mysql_xdevapi\Exception;

class EditarTurmaFormController implements IController
{

    public function request(): void
    {
        Transaction::open();

        $turma = Turma::find($_GET["id"]);


        echo Render::html(
            [

                "cabecalho.php",
                "form-store-turma.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "turmaAtt" => $turma,
                "itens" => $_SESSION["itensMenu"],
                "name_btn" => "Atualizar"
            ]);


        Transaction::close();
    }
}