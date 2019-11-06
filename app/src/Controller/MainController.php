<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

class MainController implements IController
{

    public function request(): void
    {

        $itens = array("itens" =>
            array( "url" => '/gerenciarAluno', "icone" => 'ico1', "nome" => 'GERENCIAR ALUNO',"status"),
            array( "url" => '/gerenciarProfessor', "icone" => 'ico2', "nome" => 'GERENCIAR PROFESSOR'),
            array( "url" => '/gerenciarAdmin', "icone" => 'ico3', "nome" => 'GERENCIAR ADMIN')
        );

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