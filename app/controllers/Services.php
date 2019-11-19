<?php

namespace App\Controllers;

use App\Core\Controller;

class Services extends Controller {

    function actionIndex() {
        $this->render('services_view.php');
    }

}
