<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class FormValidaUserController implements IController
{


    public function request(): void
    {
        echo Render::html(
            [

                "form-valida-user.php",

            ],
            [

            ]);
    }

}