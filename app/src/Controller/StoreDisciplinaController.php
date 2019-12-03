<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;


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


        if($disciplina->id == null){
            $this->create( new Message("Disciplina cadastrada com Sucesso!","alert-success"));
        }else{
            $this->create( new Message("Disciplina atualizada com Sucesso!","alert-success"));
        }
        $disciplina->store();
        Util::redirect(5, $disciplina->id_turma);


        Transaction::close();
        exit();
    }
}
