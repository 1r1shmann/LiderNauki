<?php

namespace app\controllers;

use app\core\Controller;

class AdminController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

}
