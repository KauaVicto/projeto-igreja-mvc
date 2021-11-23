<?php

namespace App\Controller\View;

use App\Utils\View;

class Home
{
    
    public static function getHome()
    {
        return View::render('pages/home');
    }
}