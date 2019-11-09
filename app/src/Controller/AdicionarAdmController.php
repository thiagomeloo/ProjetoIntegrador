<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class AdicionarAdmController implements IController
{
    public function request(): void
    {
        $usuario = new Usuario();
        $usuario->nome = $_POST['nome'];
        $usuario->email = $_POST['email'];
        $usuario->senha = password_hash("123", PASSWORD_ARGON2I);


        Transaction::open();
        $usuario->store();
        Transaction::close();
        //enviar o email para o usuario aqui
        header('Location: /main', true, 302);
        exit();
    }
}
