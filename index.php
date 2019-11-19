<?php
ini_set('display_errors', 1);

require 'vendor/autoload.php';

$controller_name = 'General';
$action_name = 'index';

$routes = explode('/', $_SERVER['REQUEST_URI']);

// получаем имя контроллера
if (!empty($routes[1])) {
    $controller_name = $routes[1];
}

// получаем имя экшена
if (!empty($routes[2])) {
    $action_name = $routes[2];
}

// добавляем префиксы
$controller_name = 'App\Controllers\\'.$controller_name ;
$action_name = 'action' . $action_name;

// создаем контроллер
$controller = new $controller_name;
$action = $action_name;

if (method_exists($controller, $action)) {
    // вызываем действие контроллера
    $controller->$action();
} else {
    /**/
}

