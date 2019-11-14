<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Email;
use Ifnc\Tads\Helper\Mensagem;
use Ifnc\Tads\Helper\Transaction;


class AdicionarAdmController implements IController
{
    public function request(): void
    {
        $usuario = new Usuario();
        $usuario->nome = $_POST['nome'];
        $usuario->email = $_POST['email'];

        $senha =Email::random_key(8);
        $usuario->senha = password_hash($senha, PASSWORD_ARGON2I);;


        Transaction::open();
        $usuario->store();
        Transaction::close();
        //enviar o email para o usuario aqui
        $_SESSION["msg"] = Mensagem::create_msg("Usuario cadastrado com Sucesso!","alert-success");

        $em = new Email($usuario->email, $usuario->nome, "Validação de conta",
            "Olá segue em anexo o codigo e o link para validação de sua conta. \n
            Codigo:".$senha."\n
            link:http://localhost/formValidaUser?email=".$usuario->email." \n
            att: equipe SWE.");

        header('Location: /main', true, 302);
        exit();
    }
}
