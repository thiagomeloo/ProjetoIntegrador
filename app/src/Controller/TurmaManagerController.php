<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\DisciplinaMapper;

class TurmaManagerController implements IController

{

    public function request(): void
    {
        Transaction::open();

        $turma = Turma::find($_GET['id']);
        $turma->upload();

        $disciplinas = Disciplina::all("id_turma =".$_GET['id']);
        foreach ($disciplinas as $disciplina){
            $disciplina->id_professor = Usuario::find($disciplina->id_professor);
        }

        echo Render::html(
            [

                "cabecalho.php",
                "contentTurmaManager.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "turma" => $turma,
                "disciplinas" => $disciplinas,
                "itens" => $_SESSION["itensMenu"]
            ]);
        Transaction::close();
    }
}