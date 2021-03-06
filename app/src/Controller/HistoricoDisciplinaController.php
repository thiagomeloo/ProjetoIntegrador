<?php

namespace Ifnc\Tads\Controller;



use Ifnc\Tads\Entity\DisciplinaHistory;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;

class HistoricoDisciplinaController implements IController

{

    public function request(): void
    {
        Transaction::open();

        $result = DisciplinaHistory::all('id_disciplina_new ='.$_GET['id']);

        foreach ($result as $r){
            $r->id_professor_new = Usuario::find($r->id_professor_new);
            $r->id_professor_old = Usuario::find($r->id_professor_old);
            $r->data_modificacao = Util::dataHora($r->data_modificacao);
        }


        echo json_encode($result);


        Transaction::close();
    }
}