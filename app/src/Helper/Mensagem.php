<?php


namespace Ifnc\Tads\Helper;


class Mensagem
{
    public static function create_msg($texto, $tipoMsg){
        return array( "msg" => "$texto", "tipo" => "$tipoMsg","status" => 0);
    }



    public static function exibe_msg(){
        if(isset($_SESSION["msg"]) && ($_SESSION["msg"]["status"] == 0)){
            echo '<div class="row- col- alert sticky-top '.$_SESSION["msg"]['tipo'].' alert-dismissible fade show"role="alert">';
                echo $_SESSION["msg"]['msg'];
                echo '<button type="button" class="close m-auto" data-dismiss="alert" aria-label="Close">';
                    echo '<span aria-hidden="true">&times;</span>';
                echo '</button>';
            echo '</div>';

            $_SESSION["msg"]["status"] = 1;
        }
    }

}


