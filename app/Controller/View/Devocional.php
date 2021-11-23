<?php

namespace App\Controller\View;

use App\Utils\View;

class Devocional extends Page
{
    
    public static function getDevocional($action)
    {
        $content = View::render('pages/devocional/'.$action);
        return parent::getPage($content, 'Devocionais');
    }
}