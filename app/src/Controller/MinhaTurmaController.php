<?php

namespace Ifnc\Tads\Controller;


use ArrayObject;
use Ifnc\Tads\Entity\AlunoTurma;
use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Matricula;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\DisciplinaHelper;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\DisciplinaMapper;

class MinhaTurmaController implements IController

{

    public function request(): void
    {
        Transaction::open();
        $us = Usuario::download();
        $alunoTurma = AlunoTurma::findByCondition("id_aluno = ".$us->id);
        $turma = Turma::find($alunoTurma->id_turma);
        $disciplinas = Disciplina::all("id_turma =".$turma->id);

        $arrayDisciplinas = null;

        foreach ($disciplinas as $disciplina){

            $disciplina->id_professor = Usuario::find($disciplina->id_professor);
            try {
                $a = Matricula::findByCondition("id_aluno = ".$us->id." and id_turma =".$turma->id."  and id_disciplina = ".$disciplina->id);
                if($a == null){
                    $arrayDisciplinas[] = new DisciplinaHelper($disciplina, 'border-danger',"share","solicitarMatricula?idAluno=".$us->id."&idTurma=".$turma->id."&idDisciplina=".$disciplina->id);
                }else if($a->status == 1){
                    $arrayDisciplinas[] = new DisciplinaHelper($disciplina, 'border-warning',"reply","cancelarMatricula?id=".$a->id);
                }else if($a->status == 2){
                    $arrayDisciplinas[] = new DisciplinaHelper($disciplina, 'border-success',"",null);
                }else{
                    $arrayDisciplinas[] = new DisciplinaHelper($disciplina, null,"",null);
                }

            } catch (Exception $e) {
                $arrayDisciplinas[] = new DisciplinaHelper($disciplina, 'border-danger');
            }

        }
        echo '<script>';
        echo 'console.log('.$arrayDisciplinas.')';
        echo '</script>';

        echo Render::html(
            [

                "cabecalho.php",
                "contentMinhaTurma.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "turma" => $turma,
                "disciplinas" => $arrayDisciplinas,
                "alunoView" => 1,
                "itens" => $_SESSION["itensMenu"]
            ]);
        Transaction::close();
    }
}