<?php

namespace App\Controllers;

use App\Core\Controller;

class Test extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

}
