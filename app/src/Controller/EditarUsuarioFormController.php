<?php


namespace Ifnc\Tads\Controller;



use Ifnc\Tads\Entity\AlunoResponsavel;
use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Responsavel;
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

        $alResp = null;
        if($us->tipo_user == 3){


            $alResp = AlunoResponsavel::all("id_aluno =".$us->id);

            foreach ($alResp as $alAtt){

                $alAtt->id_responsavel = Responsavel::find($alAtt->id_responsavel);
                $alAtt->id_aluno = Responsavel::find($alAtt->id_aluno);

            }


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
                "enderecoAtt" => Endereco::findByCondition($us->id_endereco),
                "type" => $type,
                "tpUser" => $us->tipo_user,
                "respAtt" => $alResp,
                "itens" => $_SESSION["itensMenu"],
                "name_btn" => "Atualizar"
            ]);


        Transaction::close();
    }
}