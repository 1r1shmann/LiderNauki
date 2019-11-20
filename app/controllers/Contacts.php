<?php

namespace App\Controllers;

use App\Core\Controller;

class Contacts extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

}
