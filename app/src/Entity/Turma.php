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




    use Session;


    public function __sleep(){

        return array('id');

    }

}