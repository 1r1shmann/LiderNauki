<?php

namespace app\core;

use app\components\Helper;
use app\core\Config;

class Controller {

    public $layout = 'default';

    public function render($view, $data = []) {
        if (mb_strpos($view, '/')) {
            $view_path = 'app/views/' . $view . '.php';
        } else {
            $view_path = 'app/views/' . Helper::contollerFolderName(mb_strtolower($this->getClassName())) . '/' . $view . '.php';
        }

        if (file_exists($view_path)) {
            if ($data) {
                extract($data);
            }
            ob_start();
            require $view_path;
            $content = ob_get_clean();
            require 'app/views/layouts/' . $this->layout . '.php';
        } else {
            echo 'View not found';
        }
    }

    public function renderPartial($view, $data = []) {
        if (mb_strpos($view, '/')) {
            $view_path = 'app/views/' . $view . '.php';
        } else {
            $view_path = 'app/views/' . Helper::contollerFolderName(mb_strtolower($this->getClassName())) . '/' . $view . '.php';
        }

        if (file_exists($view_path)) {
            if ($data) {
                extract($data);
            }
            require $view_path;
        } else {
            echo 'View not found';
        }
    }

    public function getClassName() {
        $rf = new \ReflectionClass($this);
        return $rf->getShortName();
    }

    public function createUrl($url) {
        return '//' . $_SERVER['HTTP_HOST'] . (Config::ROOT_DIR ? '/' . Config::ROOT_DIR : '') . '/' . $url;
    }

    public function redirect($url) {
        header('Location: ' . $this->createUrl($url));
    }

}
