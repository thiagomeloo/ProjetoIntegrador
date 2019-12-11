<?php


namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class AlunoTurma extends Record
{

    public $id;
    public $id_aluno;
    public $id_turma;



    use Session;


    public function __sleep(){

        return array('id');

    }

}