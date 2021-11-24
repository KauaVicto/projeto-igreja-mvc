<?php

namespace App\Controller\View;
use App\Utils\View;

class Page
{

    public static function getPage($content, $title = 'IPB Brumado')
    {
        return View::render('pages/page', [
            'title' => $title,
            'content' => $content,
            'pasta_raiz' => PASTA_RAIZ
        ]);
    }
}