<?php

namespace App\Controller\View;

use App\Utils\View;

class Usuario extends Page
{
    
    public static function getUsuario($action)
    {
        $content = View::render('pages/usuario/'.$action);
        return parent::getPage($content, 'Usuário - '.$action);
    }
}