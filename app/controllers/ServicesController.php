<?php

namespace App\Controllers;

use App\Core\Controller;

class ServicesController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

}
