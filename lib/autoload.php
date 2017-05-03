<?php
spl_autoload_register(function($element){
    $paths = [
        'Library'=>'../lib',
        'Model' => '../model',
        'Controller' => '../controller',
    ];
    $route = explode('\\',$element);
    $context = array_shift($route);
    $filepath = $paths[$context];
    foreach($route as $item){
        $filepath .= '/'.$item;
    }
    $filename = $filepath . '.php';
    if(file_exists($filename)){
        include_once($filename);
    }
});
/*
spl_autoload_register(function ($lib) {
    $classname = str_replace('MVC\\','',$lib);
    $filename = "../lib/". $classname .".php";
    include_once($filename);
});

spl_autoload_register(function ($controller) {
    list($module, $controller) = explode('\\',$controller);
    $filename = "../controller/$module/$controller.php";
    include_once($filename);
});

spl_autoload_register(function ($model) {
    $classname = str_replace('Model\\','',$model);
    $filename = "../model/". $classname .".php";
    include_once($filename);
});
*/
