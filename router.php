<?php

use \App\Controller\View\Home;
use \App\Controller\View\Page;
use \App\Controller\Router;

if(isset($_GET['uri'])){

    $router = new Router($_GET['uri']);
    
    if($router->params['view'] == 'home'){
        echo Home::getHome();
    }
}else{
    echo Home::getHome();
}