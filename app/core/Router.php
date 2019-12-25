<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Core;

/**
 * Description of Router
 *
 * @author control
 */
class Router {

    public $controller = 'Main';
    public $action = 'Index';
    public $id = NULL;

    function __construct($url, $config) {
        $url = explode('/', rtrim($url, '/'));
        
        $this->controller = isset($url[0]) && $url[0] != '' ? ucfirst($url[0]) : $this->controller;
        $this->action = isset($url[1]) && $url[1] != '' ? $url[1] : $this->action;
        $this->id = isset($url[2]) && $url[2] != '' ? $url[2] : $this->id;
        
        $this->controller = '\App\Controllers\\' . $this->controller . 'Controller';
        $this->action = 'action' . $this->action;

        if (class_exists($this->controller)) {
            $controller = new $this->controller($config);
            if (method_exists($this->controller, $this->action)) {

                if ($this->id) {
                    $controller->{$this->action}($this->id);
                } else {
                    $controller->{$this->action}();
                }
            } else {
                $error = new \App\Controllers\ErrorController($config);
                $error->action404();
            }
        } else {
            $error = new \App\Controllers\ErrorController($config);
            $error->action404();
        }
    }

}
