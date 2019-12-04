<?php


namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class DisciplinaHistory extends Record
{
    public $id;
    public $id_disciplina_new;
    public $nome_new;
    public $qtd_aulas_new;
    public $status_new;
    public $id_professor_new;
    public $id_turma_new;

    public $id_disciplina_old;
    public $nome_old;
    public $qtd_aulas_old;
    public $status_old;
    public $id_professor_old;
    public $id_turma_old;

    public $data_modificacao;


    use Session;

    public function __sleep(){

        return array('id');

    }


}