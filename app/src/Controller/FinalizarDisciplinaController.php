<?php


namespace Ifnc\Tads\Controller;



use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Matricula;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;
use mysql_xdevapi\Exception;

class FinalizarDisciplinaController implements IController
{

    use Flash;
    public function request(): void
    {
        Transaction::open();



        $id = $_POST['id'];
        $notaFinal = $_POST['notaFinal'];
        $faltas = $_POST['faltas'];


        for($i = 0; $i < count($id); $i++){
            $mat = Matricula::find($id[$i]);
            $mat->nota_final = $notaFinal[$i];
            $mat->faltas = $faltas[$i];
            $mat->store();
        }

        $this->create(new Message(
            'Disciplina finalizada com Sucesso!','alert-success'
        ));

        Util::redirect(7);






        Transaction::close();
    }
}