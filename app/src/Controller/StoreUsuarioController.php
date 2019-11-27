<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Email;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\SendEmail;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;


class StoreUsuarioController implements IController
{
    use Flash;

    public function request(): void
    {
        Transaction::open();
        $endereco = new Endereco();
        $endereco->id = $_POST['id_endereco'];
        $endereco->rua = $_POST['rua'];
        $endereco->numero = $_POST['numero'];
        $endereco->bairro = $_POST['bairro'];
        $endereco->cidade = $_POST['cidade'];
        $endereco->estado = $_POST['estado'];
        $endereco->cep = $_POST['cep'];
        $endereco->store();


        $usuario = new Usuario();
        $usuario->id = $_POST['id'];
        $usuario->nome = $_POST['nome'];
        $usuario->email = $_POST['email'];
        $usuario->cpf = $_POST['cpf'];
        $usuario->data_nascimento = $_POST['data_nascimento'];

        //dados da identidade do usuario
        $usuario->identidade_numero = $_POST['identidade_numero'];
        $usuario->identidade_orgao_expeditor = $_POST['identidade_orgao_expeditor'];
        $usuario->identidade_uf = $_POST['identidade_uf'];
        $usuario->identidade_data_expedicao = $_POST['identidade_data_expedicao'];

        //dados da certidao de nascimento ou casamento
        $usuario->certidao_tipo = $_POST['certidao_tipo'];
        $usuario->certidao_cartorio = $_POST['certidao_cartorio'];
        $usuario->certidao_numero_de_termo = $_POST['certidao_numero_de_termo'];
        $usuario->certidao_folha = $_POST['certidao_folha'];
        $usuario->certidao_livro = $_POST['certidao_livro'];
        $usuario->certidao_data_emissao = $_POST['certidao_data_emissao'];

        //dados titulo eleitor
        $usuario->titulo_numero = $_POST['titulo_numero'];
        $usuario->titulo_zona = $_POST['titulo_zona'];
        $usuario->titulo_secao = $_POST['titulo_secao'];
        $usuario->titulo_uf = $_POST['titulo_uf'];

        $usuario->tipo_user = $_POST['tipo_user'] ;
        $usuario->status_user = 0;
        if(isset($_POST['id_endereco']) && $_POST['id_endereco'] != null){
            $usuario->id_endereco = $_POST['id_endereco'];
        }else{
            $usuario->id_endereco = $endereco->id;
        }




        $senha =Util::random_key(8);
        $usuario->senha = password_hash($senha, PASSWORD_ARGON2I);



        $consulta_usuario = Usuario::findByCondition("email='{$_POST['email']}'");
        if($consulta_usuario != null && $usuario->id != $consulta_usuario->id){

            $this->create( new Message("Ops, Já existe um usuario cadastrado com esse email!","alert-danger"));
            echo "<script>javascript:history.back(-2)</script>";


        }else if($usuario->id == null){

            $usuario->store();
            $this->create( new Message("Usuario cadastrado com Sucesso!","alert-success"));
            $email = new Email();
            $email->emailDestino = $usuario->email;
            $email->titulo = "Validação de Conta";
            $email-> conteudo = /** @lang text */
                "               Olá <b>{$usuario->nome}</b>, segue em anexo o codigo e link para validação de sua conta.<br>
                            Por favor insira uma senha de acesso no ato da validação.<br>
                            Codigo: <b>{$senha}</b><br>
                            Link: http://localhost/formValidaUser?email={$usuario->email}<br>
                            att: equipe SWE.";

            $em = SendEmail::send($email);
            if(em == 0){
                $this->create( new Message("Email enviado com sucesso!","alert-success"));
            }else if($em == 1){
                $this->create( new Message("Erro no envio do email, Para validação do usuario repasse o seguinte codigo: $senha","alert-danger"));
            }
            Util::redirect($usuario->tipo_user);

        }else if($usuario->id != null){
            $usuario->store();
            $this->create( new Message("Usuario atualizado com Sucesso!","alert-success"));
            Util::redirect($usuario->tipo_user);
        }

        Transaction::close();
        exit();
    }
}
