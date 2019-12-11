<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\AlunoTurma;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class CadastrarAlunoController implements IController

{

    public function request(): void
    {

        Transaction::open();

        $turmas = Turma::all();

        for ($i = 0; $i < count($turmas); $i++){
            $qtd = AlunoTurma::count("id_turma = ".$turmas[$i]->id);
            if($qtd >= $turmas[$i]->qtd_max_alunos) {
                unset($turmas[$i]);
            }
        }

        echo Render::html(
            [

                "cabecalho.php",
                "form-store-usuario.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "name_btn" => "Cadastrar",
                "itens" => $_SESSION["itensMenu"],
                "tpUser" => 3,
                "turmas" => $turmas
            ]);

        Transaction::close();
    }
}