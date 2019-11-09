<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class ValidaUserController implements IController

{
    public function request(): void
    {
        Transaction::open();
        $usuario = Usuario::find($_GET['id']);
        Transaction::close();

       if($usuario != null){
           $usuario->status = 1;
           Transaction::open();
           $usuario->store();
           Transaction::close();
           header("Location: /main", true, 302);

           exit();
       }




    }
}



