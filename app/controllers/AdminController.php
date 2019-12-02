<?php

namespace App\Controllers;

use App\Core\Controller;

class AdminController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }
    
}
