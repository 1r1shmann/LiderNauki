<?php

namespace App\Controllers;

use App\Core\Controller;

class General extends Controller {

    public function actionIndex() {
        $this->render('index');
    }
    
    public function actionLanding(){
//        $this->render();
    }
}
