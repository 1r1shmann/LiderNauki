<?php

namespace App\Controllers;

use App\Core\Controller;

class TestController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

}
