<?php

define("PASTA_RAIZ", __DIR__);

require PASTA_RAIZ . '/vendor/autoload.php';

use \App\Controller\View\Home;
use \App\Controller\View\Page;

echo '<pre>';
print_r($_GET);
echo '</pre>';

echo Page::getPage();