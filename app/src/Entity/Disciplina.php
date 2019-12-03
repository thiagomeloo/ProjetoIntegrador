<?php


namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class Disciplina extends Record
{
    public $id;
    public $nome;
    public $qtd_aulas;
    public $status;
    public $id_professor;
    public $id_turma;

    use Session;

    public function __sleep(){

        return array('id');

    }


}