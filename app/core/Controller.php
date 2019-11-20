<?php

namespace App\Core;

class Controller {

    public $config;

    // действие (action), вызываемое по умолчанию
    public function __construct() {
        $this->config = new \App\Core\Config();
    }

    //render
    public function render($view, $data = [], $template = 'default') {
        if (mb_strpos($view, '/')) {
            $view = 'app/views/' . $view . '.php';
        } else {
            $view = 'app/views/' . mb_strtolower($this->getClassName()) . '/' . $view . '.php';
        }
        if ($data) {
            extract($data);
        }
        if ($template !== 'default') {
            include 'app/views/templates/' . $template . '.php';
        } else {
            include 'app/views/templates/default.php';
        }
    }

    public function renderPartial($view, $data = [], $template = 'default') {
        if (mb_strpos($view, '/')) {
            $view = 'app/views/' . $view . '.php';
        } else {
            $view = 'app/views/' . $this->getClassName() . '/' . $view . '.php';
        }
        if ($data) {
            extract($data);
        }
        include $view;
    }

    public function getClassName() {
        $rf = new \ReflectionClass($this);
        return $rf->getShortName();
    }

    public function createUrl($url) {
        return '//' . $_SERVER['HTTP_HOST'] . '/' . $url;
    }
    
}
