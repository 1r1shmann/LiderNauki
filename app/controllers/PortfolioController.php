<?php

namespace App\Controllers;

use App\Core\Controller;

class PortfolioController extends Controller {

    public function actionIndex() {
        $model = new \App\Models\Portfolio();
        $data = $model->get_data();
        $this->render('index', $data);
    }

}
