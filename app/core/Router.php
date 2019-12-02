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
            
    
    function __construct($url) {
        $url = $url;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        
        $this->controller = $url[0] ? ucfirst($url[0]) : $this->controller;
        $this->controller = '\App\Controllers\\' . $this->controller . 'Controller';
        
        $this->action = $url[1] ? $url[1] : $this->action;
        $this->action = 'action' . $this->action;
        
        $this->id = $url[2] ? $url[2] : $this->id;
        
        if (class_exists($this->controller)) {
            $controller = new $this->controller;
            if (method_exists($this->controller, $this->action)) {

                if ($id) {
                    $controller->{$this->action}($this->id);
                } else {
                    $controller->{$this->action}();
                }
            } else {
                $error = new \App\Controllers\ErrorController();
                $error->action404();
            }
        } else {
            $error = new \App\Controllers\ErrorController();
            $error->action404();
        }
        var_dump($this);
    }
}
