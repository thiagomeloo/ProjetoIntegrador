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

        $type = isset($_GET["type"]) ? $_GET["type"] : 0;


        echo Render::html(
            [

                "cabecalho.php",
                "form-store-usuario.php",
                "rodape.php"

            ],
            [
                "usuario" => Usuario::download(),
                "usuarioAtt" => $us,
                "enderecoAtt" => Endereco::findByCondition($us->id_endereco),
                "type" => $type,
                "itens" => $_SESSION["itensMenu"],
                "name_btn" => "Atualizar"
            ]);


        Transaction::close();
    }
}