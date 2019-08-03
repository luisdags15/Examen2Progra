    
<?php

require_once 'vendor/autoload.php';
use controller\UserController;

session_start();

$modulo = "";

if (is_null($modulo) || empty($modulo) || $modulo == "index")
{
    $usrController = new UserController();
    require_once($usrController->show() . ".php");
}

$uri = explode("/", $_SERVER['REQUEST_URI']);




