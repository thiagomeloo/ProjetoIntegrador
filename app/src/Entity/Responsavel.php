<?php


namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class Responsavel extends Record
{

    public $id;
    public $nome;
    public $cpf;
    public $data_nascimento;
    public $senha;



    use Session;


    public function __sleep(){

        return array('id','nome');

    }

}