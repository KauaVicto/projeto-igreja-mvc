<?php

namespace App\Controller;

class Router
{
    public $uri = '';
    public $params = [];
    private $pattern = [
        'view',
        'action',
        'param'
    ];

    public function __construct($uri)
    {
        $this->uri = $uri;
        $this->setParams();
    }

    /**
     * Método responsável por setar os parâmetros em um array e os nomear
     */
    public function setParams()
    {
        $xUri = explode('/', $this->uri);

        foreach($xUri as $key => $par){
            $param = $this->pattern[$key];
            $this->params[$param] = $par;
        }

    }
}