<?php

namespace App\Utils;

class View
{

    public static function getContext($view)
    {
        $file = PASTA_RAIZ . '/resources/view/'.$view.'.html';

        // Se existir um arquivo com aquele caminho retorna seu contexto, senão retorna vazio
        return (file_exists($file)) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar o conteúdo renderizado da view
     * @param string $view
     */
    public static function render($view)
    {
        $content = self::getContext($view);

        return $content;
    }
}