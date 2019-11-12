<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Mensagem;
use Ifnc\Tads\Helper\Transaction;

class LoginController implements IController
{

    public function request(): void
    {
        $email = filter_input(INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );

        if (is_null($email) || $email === false) {
            $_SESSION["msg"]= Mensagem::create_msg("Email ou Senha incorretos!","alert-danger");
            header('Location: /login-form');
            exit();
        }

        $senha = filter_input(INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING);

        Transaction::open();
        $usuario = Usuario::findByCondition("email='{$_POST['email']}'");
        if (!$usuario || !$usuario->valide($senha)) {
            $_SESSION["msg"]= Mensagem::create_msg("Email ou Senha incorretos!","alert-danger");
            header('Location: /login-form');
            exit();
        }
        $_SESSION["usuario"]=$usuario;
        Transaction::close();
        header('Location: /main');
        exit();
    }
}