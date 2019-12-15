<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Matricula;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class BoletinsController implements IController

{

    public function request(): void
    {
        Transaction::open();
        $us = Usuario::download();
        $boletins = Matricula::all("id_aluno=".$us->id);
        foreach ($boletins as $boletin){
            $boletin->id_aluno = Usuario::find($boletin->id_aluno);
            $boletin->id_disciplina = Disciplina::find($boletin->id_disciplina);

        }



        echo Render::html(
            [

                "cabecalho.php",
                "contentBoletins.php",
                "rodape.php"

            ],
            [
                "usuario" => $us,
                "itens" => $_SESSION["itensMenu"],
                "boletins" =>$boletins ,


            ]);


        Transaction::close();
    }
}