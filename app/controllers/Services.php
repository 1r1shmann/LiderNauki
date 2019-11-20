<?php

namespace App\Controllers;

use App\Core\Controller;

class Services extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

}
