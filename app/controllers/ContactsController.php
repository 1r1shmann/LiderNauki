<?php

namespace app\controllers;

use app\core\Controller;

class ContactsController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

}
