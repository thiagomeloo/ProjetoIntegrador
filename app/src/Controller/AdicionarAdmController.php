<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Email;
use Ifnc\Tads\Helper\Mensagem;
use Ifnc\Tads\Helper\SendEmail;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;


class AdicionarAdmController implements IController
{
    public function request(): void
    {
        $usuario = new Usuario();
        $usuario->nome = $_POST['nome'];
        $usuario->email = $_POST['email'];
        $senha =Util::random_key(8);
        $usuario->senha = password_hash($senha, PASSWORD_ARGON2I);;


        Transaction::open();
        $usuario->store();
        Transaction::close();
        //enviar o email para o usuario aqui
        $_SESSION["msg"] = Mensagem::create_msg("Usuario cadastrado com Sucesso!","alert-success");

        $email = new Email();
        $email->emailDestino = $usuario->email;
        $email->titulo = "Validação de Conta";
        $email-> conteudo = /** @lang text */
            "
                            Olá <b>{$usuario->nome}</b>, segue em anexo o codigo e link para validação de sua conta.<br>
                            Por favor insira uma senha de acesso no ato da validação.<br>
                            Codigo: <b>{$senha}</b><br>
                            Link: http://localhost/formValidaUser?email={$usuario->email}<br>
                            att: equipe SWE.";

        $em = new SendEmail($email);

        header('Location: /main', true, 302);
        exit();
    }
}
