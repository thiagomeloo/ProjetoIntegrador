<?php


namespace Ifnc\Tads\Controller;



use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use mysql_xdevapi\Exception;

class EditarUsuarioFormController implements IController
{

    public function request(): void
    {
        Transaction::open();

        $us = Usuario::find($_GET["id"]);

        $enderecoBusca = new Endereco();
        if($us->id_endereco != null){
            $enderecoBusca = Endereco::findByCondition($us->id_endereco);
        }else{
            $enderecoBusca = new Endereco();
        }

        echo Render::html(
            [

                "cabecalho.php",
                "form-store-usuario.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "usuarioAtt" => $us,
                "enderecoAtt" => $enderecoBusca,
                "itens" => $_SESSION["itensMenu"],
                "name_btn" => "Atualizar"
            ]);


        Transaction::close();
    }
}