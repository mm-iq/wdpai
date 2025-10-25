<?php

require_once 'src/controllers/SecurityController.php';

class Routing {

    public static $routes = [
        'login' => [
            'controller' => "SecurityController",
            'action' => "login"
        ],
        'register' => [
            'controller' => "SecurityController",
            'action' => "register"
        ]
    ];

    public static function run(string $path){
    
    //TODO na podstawie sciezki sprawdzamy jaki HTML zwrocic
    switch($path) {
    case 'dashboard':
        # co jeśli użytkownik w url przekaże np. dashboard/1647
        # jak przekazać zmienną do akcji z kontrolera?        
        include 'public/views/dashboard.html';
        break;
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