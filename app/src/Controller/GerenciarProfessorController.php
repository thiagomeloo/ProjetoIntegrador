<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class GerenciarProfessorController implements IController
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
                "nomePag" => "Gerenciar Professor",
                "urlCadastrar" => "/cadastrarProfessor",
                "entidade" => "Professores",
                "usuariosArray"=> Usuario::all("tipo_user = 2"),
                "qtdAtivo" => Usuario::count("tipo_user = 2 and status_user = 1"),
                "qtdInativo" => Usuario::count("tipo_user = 2 and status_user != 1"),
                "qtdTotal" => Usuario::count("tipo_user = 2"),
                "itens" => $_SESSION["itensMenu"]
            ]);
        Transaction::close();
    }
}