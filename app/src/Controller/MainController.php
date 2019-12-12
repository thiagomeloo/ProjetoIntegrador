<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use PHPMailer\PHPMailer\Exception;

class MainController implements IController
{

    public function request(): void
    {

        Transaction::open();

        $itens = array();
        $usuario = Usuario::download();

        switch ($usuario->tipo_user){
            case 1:
                $itens = array("itens" =>
                    array( "url" => '/gerenciarAluno', "icone" => 'fa-user-graduate', "nome" => ' GERENCIAR ALUNO '),
                    array( "url" => '/gerenciarProfessor', "icone" => 'fa-user', "nome" => ' GERENCIAR PROFESSOR '),
                    array( "url" => '/gerenciarTurma', "icone" => 'fa-pen-square', "nome" => ' GERENCIAR TURMA '),
                    array( "url" => '/gerenciarAdmin', "icone" => 'fa-user-secret', "nome" => ' GERENCIAR ADMIN ')
                );
                break;
            case 2:
                $itens = array("itens" =>
                    array( "url" => '/gerenciarAluno', "icone" => 'ico1', "nome" => 'COISA 2'),
                    array( "url" => '/gerenciarProfessor', "icone" => 'ico2', "nome" => 'COISA 3'),
                    array( "url" => '/gerenciarProfessor', "icone" => 'ico2', "nome" => 'COISA 4'),
                    array( "url" => '/gerenciarAdmin', "icone" => 'ico3', "nome" => 'COISA 5')
                );
                break;
            case 3:
                $itens = array("itens" =>
                    array( "url" => '/minhaTurma', "icone" => 'fa-user-graduate', "nome" => 'MINHA TURMA'),

                );
                break;
        }

        $_SESSION["itensMenu"] = $itens;


        echo Render::html(
            [
                "cabecalho.php",
                "contentMain.php",
                "rodape.php"
            ],
            [
                "usuario"=>$usuario,
                "enderecoUsuario" => $enderecoTemp = Endereco::find($usuario->id_endereco) ,
                "itens" => $_SESSION["itensMenu"]

            ]);

        Transaction::close();
    }
}