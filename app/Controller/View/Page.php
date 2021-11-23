<?php

namespace App\Controller\View;
use App\Utils\View;

class Page
{

    public static function getPage($content)
    {
        return View::render('pages/page', [
            'content' => $content
        ]);
    }
}