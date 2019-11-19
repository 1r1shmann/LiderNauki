<?php

namespace App\Controllers;

use App\Core\Controller;

class Contacts extends Controller {

    function actionIndex() {
        $this->render('contacts_view.php');
    }

}
