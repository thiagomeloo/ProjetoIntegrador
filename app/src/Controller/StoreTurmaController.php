<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;


class StoreTurmaController implements IController
{
    use Flash;

    public function request(): void
    {
        Transaction::open();
        $turma = new Turma();
        $turma->id = $_POST['id'];
        $turma->nome = $_POST['nome'];
        $turma->qtd_max_alunos = $_POST['qtd_max_alunos'];
        $turma->turno = $_POST['turno'];
        $turma->data_inicio_matricula = $_POST['data_inicio_matricula'];
        $turma->data_final_matricula = $_POST['data_final_matricula'];

        if($turma->id == null){
            $this->create( new Message("Turma cadastrada com Sucesso!","alert-success"));
        }else{
            $this->create( new Message("Turma atualizada com Sucesso!","alert-success"));
        }
        $turma->store();
        Util::redirect(4);


        Transaction::close();
        exit();
    }
}
