<?php

    ini_set('display_errors', 1);
    require 'vendor/autoload.php';

    $controller_name = 'General';
    $action_name = 'Index';
    define('ROOT', dirname(__FILE__));

    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);


    $controller_name = $url[0] ? $url[0] : $controller_name;
    $controller_name = 'App\Controllers\\' . $controller_name;

    $action_name = $url[1] ? $url[1] : $action_name;
    $action = 'action' . $action_name;
    $id = $url[2] ? $url[2] : NULL;
    if (class_exists($controller_name)) {
        $controller = new $controller_name;
        if (method_exists($controller, $action)) {

            if ($id) {
                $controller->$action($id);
            } else {
                $controller->$action();
            }
        } else {
            $error = new App\Controllers\Error();
            $error->action404();
        }
    } else {
        $error = new App\Controllers\Error();
        $error->action404();
    }

