<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Matricula;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;



class CancelarMatriculaController implements IController
{

    use Flash;
    public function request(): void
    {

        Transaction::open();
        $id = $_GET["id"];
        try {


            Matricula::delete($id);



            $this->create(new Message(
                'Matricula cancelada com Sucesso!','alert-success'
            ));

        } catch (\Exception $e) {
            $this->create(new Message(
                'Ops, ocorreu algum erro ao cancelar a matricula!','alert-danger'
            ));

        }
        Transaction::close();
        Util::redirect(6);

    }
}