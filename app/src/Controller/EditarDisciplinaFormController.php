<?php


namespace Ifnc\Tads\Controller;



use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use mysql_xdevapi\Exception;

class EditarDisciplinaFormController implements IController
{

    public function request(): void
    {
        Transaction::open();

        //$turma = Turma::find($_GET["id"]);

        $disciplinaAtt = Disciplina::find($_GET["id"]);

        $disciplinaAtt->id_professor = Usuario::find( $disciplinaAtt->id_professor);

        echo Render::html(
            [

                "cabecalho.php",
                "form-store-disciplina.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "disciplinaAtt" => $disciplinaAtt,
                "professores" => Usuario::all("tipo_user = 2"),
                "itens" => $_SESSION["itensMenu"],
                "name_btn" => "Atualizar"
            ]);


        Transaction::close();
    }
}