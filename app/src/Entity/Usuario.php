<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class Usuario extends Record
{
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $data_de_nascimento;
    public $cpf;
    public $titulo_numero;
    public $titulo_zona;
    public $titulo_secao;
    public $titulo_uf;
    public $identidade_numero;
    public $identidade_orgao_expeditor;
    public $identidade_uf;
    public $identidade_data_expedicao;
    public $certidao_tipo;
    public $certidao_cartorio;
    public $certidao_numero_de_termo;
    public $certidao_folha;
    public $certidao_livro;
    public $certidao_data_emissao;
    public $tipo_user;
    public $status_user;

    use Session;

    public function valide($senha){
        return password_verify($senha,$this->senha);
    }

    public function __sleep(){

        return array('id','nome','email','data_nascimento','cpf','titulo_numero','titulo_zona',
            'titulo_secao','titulo_uf','identidade_numero','identidade_orgao_expeditor','identidade_uf',
            'identidade_data_expedicao','certidao_tipo','certidao_cartorio','certidao_numero_de_termo',
            'certidao_folha','certidao_livro','certidao_data_emissao','tipo_user','status_user');

    }
}