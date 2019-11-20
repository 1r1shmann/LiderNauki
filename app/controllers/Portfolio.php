<?php

namespace App\Controllers;

use App\Core\Controller;

class Portfolio extends Controller {

    public function __construct() {
        $this->model = new \App\Models\Portfolio();
    }

    public function actionIndex() {
        $data = $this->model->get_data();
        $this->render('index', $data);
    }

}
