<?php 


class Router
{

	private $routes;

	public function __construct()
	{
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
	}

/*
 * Return request string
 * @return string
 */
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
    //   version 1.0
                //                $segments = explode('/', $path);
//
//                $controllerName = array_shift($segments) . 'Controller';
//                $controllerName = ucfirst($controllerName); //uppercasefirst;
//
//                $actionName = 'action' . ucfirst(array_shift($segments));
//                $controllerFile = ROOT . '/controllers' . '/' . $controllerName . '.php';
//
//                if (file_exists($controllerFile)) {
//                    include_once("$controllerFile");
//                }
//
//
//                $controllerObject = new $controllerName;
//                $result = $controllerObject->$actionName();
//                if ($result != null){
//                    break;
//                }
//

    //version 1.1

    //Getting internal route

//                echo '<br>' . 'user input: ' . $uri;
//                echo '<br>' . 'what(pattern) router should search: ' . $uriPattern;
//                echo '<br>' . 'what worked: ' . $path;
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
//                echo '<br>' . 'what need to create: ' . $internalRoute;
    //Setting controller
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName); //uppercasefirst;

     //Setting action

                $actionName = 'action' . ucfirst(array_shift($segments));
                $controllerFile = ROOT . '/controllers' . '/' . $controllerName . '.php';
//                echo "<br>controller name: $controllerName";
//                echo "<br>action name: $actionName <br>";
                $parameters = $segments;
//                print_r($parameters);
    //Calling action
                if (file_exists($controllerFile)) {
                    include_once("$controllerFile");
                }
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters); // send data to array as variables;
                if($result !=0){
                    break;
                }

            }

        }


	}


//ADD CLASS AUTOLOAD!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}