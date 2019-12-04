<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\DisciplinaHistory;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;
use mysql_xdevapi\Exception;


class StoreDisciplinaController implements IController
{
    use Flash;

    public function request(): void
    {


        Transaction::open();
        $disciplina = new Disciplina();
        $disciplina->id = $_POST['id'];
        $disciplina->nome = $_POST['nome'];
        $disciplina->qtd_aulas = $_POST['qtd_aulas'];
        $disciplina->id_professor = $_POST['id_professor'];
        $disciplina->id_turma = $_POST['id_turma'];

        $disciplinaHistory = new DisciplinaHistory();

        if($disciplina->id == null){

            $this->create( new Message("Disciplina cadastrada com Sucesso!","alert-success"));

        }else{

            $disciplinaOld = Disciplina::find($_POST['id']);

            if($disciplina-> nome == $disciplinaOld-> nome && $disciplina->qtd_aulas == $disciplinaOld->qtd_aulas
                && $disciplina->id_professor == $disciplinaOld->id_professor){
                Util::redirect(5, $disciplina->id_turma);
                exit();
            }

            $disciplinaHistory->id_disciplina_old = $disciplinaOld->id;
            $disciplinaHistory->nome_old = $disciplinaOld->nome;
            $disciplinaHistory->qtd_aulas_old = $disciplinaOld->qtd_aulas;
            $disciplinaHistory->id_professor_old = $disciplinaOld->id_professor;
            $disciplinaHistory->id_turma_old = $disciplinaOld->id_turma;

            $disciplinaHistory->id_disciplina_new = $disciplinaOld->id;
            $disciplinaHistory->nome_new = $_POST['nome'];
            $disciplinaHistory->qtd_aulas_new = $_POST['qtd_aulas'];
            $disciplinaHistory->id_professor_new = $_POST['id_professor'];
            $disciplinaHistory->id_turma_new = $_POST['id_turma'];

            $disciplinaHistory->store();

            $this->create( new Message("Disciplina atualizada com Sucesso!","alert-success"));

        }


        $disciplina->store();

        Util::redirect(5, $disciplina->id_turma);


        Transaction::close();
        exit();
    }
}
