<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class GerenciarAlunoController implements IController

{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [

                "cabecalho.php",
                "contentGerenciarUsuario.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "nomePag" => "Gerenciar Aluno",
                "urlCadastrar" => "/cadastrarAluno",
                "entidade" => "Alunos",
                "usuariosArray"=> Usuario::all("tipo_user = 3"),
                "itens" => $_SESSION["itensMenu"],
                "qtdAtivo" => Usuario::count("tipo_user = 3 and status_user = 1"),
                "qtdInativo" => Usuario::count("tipo_user = 3 and status_user != 1"),
                "qtdTotal" => Usuario::count(),

            ]);


        Transaction::close();
    }
}