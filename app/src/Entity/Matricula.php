<?php


namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class Matricula extends Record
{

    public $id;
    public $status;
    public $nota_final;
    public $faltas;
    public $data_matricula;
    public $id_aluno;
    public $id_turma;
    public $id_disciplina;



    use Session;


    public function __sleep(){

        return array('id');

    }

}