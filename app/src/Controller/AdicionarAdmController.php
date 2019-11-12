<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Mensagem;
use Ifnc\Tads\Helper\Send_Email;
use Ifnc\Tads\Helper\Transaction;

class AdicionarAdmController implements IController
{
    public function request(): void
    {
        $usuario = new Usuario();
        $usuario->nome = $_POST['nome'];
        $usuario->email = $_POST['email'];
//      $usuario->senha = Send_Email::random_key(8);
        $usuario->senha = password_hash("123", PASSWORD_ARGON2I);;


        Transaction::open();
        $usuario->store();
        Transaction::close();
        //enviar o email para o usuario aqui
        $_SESSION["msg"]= Mensagem::create_msg("Usuario cadastrado com Sucesso!","alert-success");
        header('Location: /main', true, 302);
        exit();
    }
}
