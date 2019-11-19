<?php

namespace App\Controllers;

use App\Core\Controller;

class Portfolio extends Controller {

    function __construct() {
        $this->model = new \App\Models\Portfolio();
    }

    function actionIndex() {
        $data = $this->model->get_data();
        $this->render('portfolio_view.php', $data);
    }

}
