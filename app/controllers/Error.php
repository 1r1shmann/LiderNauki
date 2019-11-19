<?php

namespace App\Controllers;

use App\Core\Controller;

class Error extends Controller {

    function actionIndex() {
        $this->render('404_view.php');
    }

}
