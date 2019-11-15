<?php


namespace Ifnc\Tads\Helper;


class Util
{

    public static function random_key($chars = 8) {
        $letters = 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        return substr(str_shuffle($letters), 0, $chars);
    }

}