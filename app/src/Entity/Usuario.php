<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Usuario extends Record
{
    public $id;
    public $nome;
    public $data_de_nascimento;
    public $cpf;
    public $email;
    public $senha;
    public $tipo;
    public $status;

    public function valide($senha){
        return password_verify($senha,$this->senha);
    }
}