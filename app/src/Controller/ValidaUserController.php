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
        if (is_null($usuario) || !$usuario->valide($_POST['codigo'])) {
            //header('Location: /login-form');
            exit();
        }
        $usuario->status = 1;
        $usuario->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
        $usuario->store();
        Transaction::close();

        //header("Location: /login-form", true, 302);
        exit();

    }
}



