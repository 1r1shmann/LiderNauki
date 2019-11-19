<?php

namespace App\Controllers;

use App\Core\Controller;

class General extends Controller {

    function actionIndex() {
        $this->render('main_view.php');
    }
    
    function actionLanding(){
//        $this->render();
    }
}
