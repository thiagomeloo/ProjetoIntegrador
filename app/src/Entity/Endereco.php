<?php


namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class Endereco extends Record
{
    public $id;

    use Session;


    public function __sleep(){

        return array('id');

    }
}