<?php

namespace App\Controllers;

use App\Core\Controller;

class MainController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionLogin() {
        if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
            $this->redirect('#');
        }
        $this->render('login');
    }

    public function actionAjaxLogin() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        try {
            $user = \App\Models\User::find('first', [
                        'conditions' => ['email=?', $email]
            ]);
            if (!$user) {
                throw new \Exception('Пользователь с таким E-mail не найден!');
            }
            if (!password_verify($password, $user->password)) {
                throw new \Exception('Неверный пароль!');
            }
            
            if($user->checkAccessRule('auth') !== true){
                throw new \Exception('Пользователь не имеет права на авторизацию!');
            }
            
            
            $user->last_login_date = date('Y-m-d H:i:s');
            if (!$user->save()) {
                throw new \Exception('Не удалось авторизовать пользователя!');
            }
            
            $_SESSION['auth'] = true;
            $_SESSION['user'] = $user->attributes();
            echo json_encode(['status' => 'success', 'msg' => ''], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionLogout() {
        if (!isset($_SESSION['auth']) || $_SESSION['auth'] === false) {
            $this->redirect('#');
        }
        unset($_SESSION);
        session_destroy();
        $this->redirect('main');
    }

    public function actionRegistration() {
        if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
            $this->redirect('#');
        }
        $this->render('registration');
    }

    public function actionAjaxRegistrationValidate() {
        $error = [];
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $user = \App\Models\User::find('first', [
                    'conditions' => ['email=?', $email]
        ]);
        if ($user) {
            $error[] = 'Пользователь с таким E-mail уже зарегистрирован!';
        }
        if ($password !== $confirm_password) {
            $error[] = 'Пароли не совпадают!';
        }
        if (mb_strlen($password) < 8) {
            $error[] = 'Пароль должен быть больше 7 символов!';
        }
        
        if(preg_match('/^[а-яё]{3,}$/iu', $last_name) != true){
            $error[] = 'Фамилия должна быть больше 2 символов, разрешена только кириллица!';
        }
        if(preg_match('/^[а-яё]{3,}$/iu', $first_name) != true){
            $error[] = 'Имя должно быть больше 2 символов, разрешена только кириллица!';
        }
        if(preg_match('/^[а-яё]{3,}$/iu', $middle_name) != true){
            $error[] = 'Отчество должно быть больше 2 символов, разрешена только кириллица!';
        }
        
        
        if ($error) {
            echo json_encode(['status' => 'err', 'msg' => $error], JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode(['status' => 'success'], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionAjaxRegistration() {
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        try {
            $user = new \App\Models\User();
            $user->last_name = \App\Components\Helper::mb_ucfirst(mb_strtolower($last_name));
            $user->first_name = \App\Components\Helper::mb_ucfirst(mb_strtolower($first_name));
            $user->middle_name = \App\Components\Helper::mb_ucfirst(mb_strtolower($middle_name));
            $user->email = $email;
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            $user->last_login_date = date('Y-m-d H:i:s');

            if (!$user->save()) {
                throw new \Exception('Не удалось зарегистрировать пользователя!');
            }


            $_SESSION['auth'] = true;
            $_SESSION['user'] = $user->attributes();
            echo json_encode(['status' => 'success', 'msg' => ''], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

}
