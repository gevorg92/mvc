<?php


//FRONT CONTROLLER

	//Settings		
ini_set('display_errors', 1);
error_reporting(E_ALL);

    /**Class Autoload**/
        require_once("components/Autoload.php");


	//System files connection

    define('ROOT', dirname(__FILE__));
    //require_once(ROOT.'/components/Router.php');
    $obj = new components\Router();
    $obj->run();


$test = new components\Test();
$test->test();