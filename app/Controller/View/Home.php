<?php

namespace App\Controller\View;

use App\Utils\View;

class Home extends Page
{
    
    public static function getHome()
    {
        $content = View::render('pages/home');
        return parent::getPage($content);
    }
}