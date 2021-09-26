<?php
require_once('Routes.php');
// include('./classes/Route.php');

// __autoload is depricated, change it to spl_autoload_register
function __autoload($class_name) {
        require_once './classes/' . $class_name . '.php';
    };


// function autoloader($class_name) {
//         require_once './classes/' . $class_name . '.php';
//     };

//     spl_autoload_register('autoloader');
// spl_autoload_register(function($class){
//     $path = dirname(__FILE__). "/" .strtolower(str_replace("\\", "/", $class));
//     spl_autoload($path);

// });

?>