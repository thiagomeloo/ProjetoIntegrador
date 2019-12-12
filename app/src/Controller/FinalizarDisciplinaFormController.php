<?php


namespace Ifnc\Tads\Controller;



use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Matricula;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use mysql_xdevapi\Exception;

class FinalizarDisciplinaFormController implements IController
{

    public function request(): void
    {
        Transaction::open();



        $alunos = Matricula::all("id_disciplina =".$_GET['id']);
        foreach ($alunos as $aluno){
            $aluno->id_aluno = Usuario::find($aluno->id_aluno);
        }


        echo Render::html(
            [

                "cabecalho.php",
                "contentFinalizarDisciplinasForm.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "alunos" => $alunos,
                "itens" => $_SESSION["itensMenu"]

            ]);


        Transaction::close();
    }
}