<?php


namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class Turma extends Record
{
    public $id;
    public $qtd_max_alunos;
    public $turno;
    public $data_inicio_matricula;
    public $data_final_matricula;

    public $disciplinas;
    public $alunos;


    use Session;

    public function store(){
        parent::store();
    }

    public function __sleep(){

        return array('id');

    }

    public function addDisciplina($disciplina)
    {
        $this->disciplinas[] = $disciplina;
    }

    public function getDisciplinas()
    {
        return $this->disciplinas;
    }

    public function addAluno($aluno)
    {
        $this->alunos[] = $aluno;
    }
    public function getAlunos()
    {
        return $this->alunos;
    }
}