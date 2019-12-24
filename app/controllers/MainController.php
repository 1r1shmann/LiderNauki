<?php

namespace App\Controllers;

use App\Core\Controller;

class MainController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }
    
    public function actionLogin(){
        if(isset($_SESSION['auth']) && $_SESSION['auth'] === true){
            $this->redirect('#');
        }
        $this->render('login');
    }
    public function actionAjaxLogin(){
        $login = $_POST['login'];
        $password = $_POST['password'];
        try {
            $user = \App\Models\User::find('first', [
                'conditions' => ['login=?', $login]
            ]);
            if(!$user){
                throw new \Exception('Пользователь с таким логином не найден!');
            }
            if(!password_verify($password, $user->password)){
                throw new \Exception('Неверный пароль!');
            }
            $_SESSION['auth'] = true;
            $_SESSION['user'] = $user->attributes();
            echo json_encode(['status' => 'success', 'msg' => ''], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }
}
