<?php

namespace app\controllers;

use app\core\Controller;

class ErrorController extends Controller {

    public function action404() {
        $this->render('404');
    }

    public function action403() {
        $this->render('403');
    }

    public function action500() {
        $this->render('500');
    }

}
