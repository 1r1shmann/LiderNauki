<?php

namespace App\Controllers;

use App\Core\Controller;

class Admin extends Controller {

    function actionIndex() {
        session_start();

        /*
          Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
          в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
          Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
         */
        if ($_SESSION['admin'] == "12345") {
            $this->render('admin_view.php');
        } else {
            session_destroy();
            Route::ErrorPage404();
        }
    }

    // Действие для разлогинивания администратора
    function actionLogout() {
        session_start();
        session_destroy();
        header('Location:/');
    }

}
