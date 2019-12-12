<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Matricula;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;



class MinhasDisciplinasController implements IController
{

    use Flash;
    public function request(): void
    {

        Transaction::open();
        $us = Usuario::download();
        echo Render::html(
            [

                "cabecalho.php",
                "contentMinhasDisciplinas.php",
                "rodape.php"

            ],
            [
                "usuario" => $us,
                "itens" => $_SESSION["itensMenu"],
                "disciplinas" => Disciplina::all("id_professor =".$us->id)

            ]);




        Transaction::close();

    }
}