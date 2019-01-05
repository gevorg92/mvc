<?php namespace components;


class Router
{

	private $routes;

	public function __construct()
	{
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
	}

	private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

	public function run()
	{
       $uri = $this->getURI(); //get request string;
        foreach ($this->routes as $uriPattern => $path){ //check request in routes.php
            if (preg_match("~$uriPattern~", $uri)){

    //version 1.1

    //Getting internal route
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

    //Setting controller
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName); //uppercasefirst;

     //Setting action
                $actionName = 'action' . ucfirst(array_shift($segments));
                $controllerFile = ROOT . '/controllers' . '/' . $controllerName . '.php';
                $parameters = $segments;

    //Calling action
                if (file_exists($controllerFile)) {
                    include_once("$controllerFile");
                }
                @$controllerObject = new $controllerName;
                @$result = call_user_func_array(array($controllerObject, $actionName), $parameters); // send data to array as variables;
                if($result !=0){
                    break;
                }
            }
        }
	}
}