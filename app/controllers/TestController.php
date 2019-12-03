<?php

namespace App\Controllers;

use App\Core\Controller;

class TestController extends Controller {

    public function actionIndex($id = null) {
        var_dump($id);
        $this->render('index');
    }

}
