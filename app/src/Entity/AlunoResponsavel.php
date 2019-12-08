<?php


namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class AlunoResponsavel extends Record
{

    public $id;
    public $id_aluno;
    public $id_responsavel;



    use Session;


    public function __sleep(){

        return array('id');

    }

}