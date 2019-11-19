<?php

namespace App\Controllers;

use App\Core\Controller;

class Test extends Controller {

    public function render($view, $data = [], $template = null) {

        

        if (mb_strpos($view, '/')) {
            $view = 'app/views/' . $view . '.php';
        }else{
            $view = 'app/views/' . $this->getClassName($this) . '/' . $view . '.php';
        }

        if($data){
            extract($data);
        }
        
        if ($template) {
            include 'app/views/templates/' . $template . '.php';
        } else {
            include 'app/views/templates/default.php';
        }
    }

    public function actionIndex() {
        $this->render('test_view', null, 'test_template');
//        echo  array_pop(explode('\\', __CLASS__));
    }

}
