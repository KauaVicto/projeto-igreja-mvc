<?php

use \App\Controller\View\Home;
use \App\Controller\View\Devocional;
use \App\Controller\View\Usuario;
use \App\Controller\View\Page;
use \App\Controller\Router;

if (isset($_GET['uri'])) {

    $router = new Router($_GET['uri']);
    $params = $router->params;

    if ($params['view'] == 'home') {
        echo Home::getHome();
    } elseif ($params['view'] == 'devocional') {
        echo Devocional::getDevocional($params['action']);
    } elseif ($params['view'] == 'usuario') {
        echo Usuario::getUsuario($params['action']);
    } else {
        echo Page::getPage('<h1>Página não encontrada ou em manutenção!</h1>');
    }
} else {
    echo Home::getHome();
}
