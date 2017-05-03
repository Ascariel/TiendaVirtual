<?php

#spl_autoload_register(function() {
#    $filename = "../config/config.php";
#    include_once($filename);
#});

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
