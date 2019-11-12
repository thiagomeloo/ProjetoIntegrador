<?php


namespace Ifnc\Tads\Helper;


class Mensagem
{
    public static function create_msg($texto, $tipoMsg){
        return array( "msg" => "$texto", "tipo" => "$tipoMsg","status" => 0);
    }

}