<?php

use \App\Controller\View\Home;
use \App\Controller\View\Devocional;
use \App\Controller\View\Page;
use \App\Controller\Router;

if(isset($_GET['uri'])){

    $router = new Router($_GET['uri']);
    $params = $router->params;
    
    if($params['view'] == 'home'){
        echo Home::getHome();
    }elseif($params['view'] == 'devocional'){
        echo Devocional::getDevocional($params['action']);
    }
}else{
    echo Home::getHome();
}