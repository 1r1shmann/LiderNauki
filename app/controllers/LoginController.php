<?php

namespace App\Controllers;

use App\Core\Controller;

class LoginController extends Controller {

    public function actionIndex() {
        //$data["login_status"] = "";

        if (isset($_POST['login']) && isset($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            /*
              Производим аутентификацию, сравнивая полученные значения со значениями прописанными в коде.
              Такое решение не верно с точки зрения безопсаности и сделано для упрощения примера.
              Логин и пароль должны храниться в БД, причем пароль должен быть захеширован.
             */
            if ($login == "admin" && $password == "12345") {
                $data["login_status"] = "access_granted";

                session_start();
                $_SESSION['admin'] = $password;
                header('Location:/admin');
            } else {
                $data["login_status"] = "access_denied";
            }
        } else {
            $data["login_status"] = "";
        }

        $this->render('index', $data);
    }

}
