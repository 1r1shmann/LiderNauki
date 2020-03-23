<?php

namespace app\controllers;

use app\core\Controller;

class AdminController extends Controller {

    public function actionIndex() {
        $user = \app\models\User::find('first', [
                    'conditions' => ['id=?', $_SESSION['user']['id']]
        ]);
        if($user->checkAccessRule('admin')){
            $this->render('index');
        } else {
            $this->redirect('error/403');
        }
    }

}
