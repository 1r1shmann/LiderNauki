<?php

namespace App\Controllers;

use App\Core\Controller;

class Admin extends Controller {

    public function actionIndex() {
        $this->render('index');
    }
    
}
