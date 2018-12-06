<?php


//FRONT CONTROLLER


	//Settings		
ini_set('display_errors', 1);
error_reporting(E_ALL);


	//System files connection


define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');


$obj = new Router();
$obj->run();
echo "in.php";
	