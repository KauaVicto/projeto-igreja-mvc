<?php

define("PASTA_RAIZ", __DIR__);

require PASTA_RAIZ . '/vendor/autoload.php';

use \App\Controller\View\Home;
use \App\Controller\View\Page;

echo Page::getPage();