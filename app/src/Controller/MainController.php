<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

class MainController implements IController
{

    public function request(): void
    {


        $itens = array();


        switch ($_SESSION["usuario"]->tipo_user){
            case 1:
                $itens = array("itens" =>
                    array( "url" => '/gerenciarAluno', "icone" => 'ico1', "nome" => 'GERENCIAR ALUNO'),
                    array( "url" => '/gerenciarProfessor', "icone" => 'ico2', "nome" => 'GERENCIAR PROFESSOR'),
                    array( "url" => '/validaUser?id=1', "icone" => 'ico2', "nome" => 'GERENCIAR TURMA'),
                    array( "url" => '/gerenciarAdmin', "icone" => 'ico3', "nome" => 'GERENCIAR ADMIN')
                );
                break;
            case 2:
                $itens = array("itens" =>
                    array( "url" => '/gerenciarAluno', "icone" => 'ico1', "nome" => 'COISA 2'),
                    array( "url" => '/gerenciarProfessor', "icone" => 'ico2', "nome" => 'COISA 3'),
                    array( "url" => '/gerenciarProfessor', "icone" => 'ico2', "nome" => 'COISA 4'),
                    array( "url" => '/gerenciarAdmin', "icone" => 'ico3', "nome" => 'COISA 5')
                );
        }

        $_SESSION["itensMenu"] = $itens;

        echo Render::html(
            [
                "cabecalho.php",
                "contentMain.php",
                "rodape.php"
            ],
            [
                "titulo"=>"Portal Web",
                "itens" => $_SESSION["itensMenu"]

            ]);

    }
}