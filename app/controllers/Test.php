<?php

namespace App\Controllers;

use App\Core\Controller;

class Test extends Controller {

    public function actionIndex($id = null) {
        var_dump($id);
//        $this->render('index');
    }

}
