<?php
require '../vendor/autoload.php';

use App\Model\Usuario;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $login = filter_input(INPUT_POST, 'login');
    $senha = filter_input(INPUT_POST, 'senha');

    $user = new Usuario($login, $senha);

}
