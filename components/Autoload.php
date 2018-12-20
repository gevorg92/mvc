<?php namespace components;
/**
 * Created by ******.
 * User: gevorg
 * Date: 12/20/18
 * Time: 4:02 PM
 */

spl_autoload_register(function($classname){
    $classname = ltrim($classname, '\\');
    $filename = ''; $namespace = '';
    if ($lastnspos = strpos($classname, '\\')){
        $namespace = substr($classname, 0 , $lastnspos);
        $classname = substr($classname, $lastnspos + 1);
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $filename .= str_replace('_', DIRECTORY_SEPARATOR, $classname) . '.php';
    require $filename;
});
