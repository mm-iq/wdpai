<?php

require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/DashboardController.php';

class Routing {

    public static $routes = [
        'login' => [
            'controller' => "SecurityController",
            'action' => "login"
        ],
        'register' => [
            'controller' => "SecurityController",
            'action' => "register"
        ],
        'dashboard' => [
            'controller' => "DashboardController",
            'action' => "index"
        ]        
    ];

    public static function run(string $path){
    
    //TODO na podstawie sciezki sprawdzamy jaki HTML zwrocic
    switch($path) {
    case 'dashboard':
    case 'login':
        $controller = new Routing::$routes[$path]['controller'];
        $action = Routing::$routes[$path]['action'];
        $controller->$action(); 
        break;
    default:
        include 'public/views/404.html';
        break;
    }
    }

}