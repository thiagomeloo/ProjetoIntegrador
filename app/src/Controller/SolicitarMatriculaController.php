<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\AlunoResponsavel;
use Ifnc\Tads\Entity\AlunoTurma;
use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Matricula;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;



class SolicitarMatriculaController implements IController
{

    use Flash;
    public function request(): void
    {

        Transaction::open();
        $idAluno = $_GET["idAluno"];
        $idTurma = $_GET["idTurma"];
        $idDisciplina = $_GET["idDisciplina"];

        try {

            $matricula = new Matricula();
            $matricula->status = 1;
            $matricula->id_aluno = $idAluno;
            $matricula->id_disciplina = $idDisciplina;
            $matricula->id_turma = $idTurma;
            $matricula->store();


            $this->create(new Message(
                'Matricula solicitada com Sucesso!','alert-success'
            ));

        } catch (\Exception $e) {
            $this->create(new Message(
                'Ops, ocorreu algum erro ao solicitar a matricula!','alert-danger'
            ));

        }
        Transaction::close();
        Util::redirect(6);

    }
}