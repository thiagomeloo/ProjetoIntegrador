<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class ValidaUserController implements IController
{
    public function request(): void
    {
        Transaction::open();
        $usuario = Usuario::findByCondition("email='{$_POST['email']}'");
        if (!$usuario || !$usuario->valide($_POST['codigo'])) {
            header("Location: formValidaUser?email={$_POST['email']}");
            $_SESSION["msg"]=array( "msg" => 'Verifique o codigo e tente novamente! ', "tipo" => 'alert-danger',"status" => 0);
            exit();
        }
        $usuario->status = 1;
        $usuario->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
        $usuario->store();
        Transaction::close();
        $_SESSION["msg"]=array( "msg" => 'Usuario validado com Sucesso!', "tipo" => 'alert-success',"status" => 0);

        header("Location: /login-form", true, 302);
        exit();

    }
}



