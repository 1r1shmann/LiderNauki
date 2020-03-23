<?php

namespace app\controllers;

use app\core\Controller;
use app\components\Helper;
use app\components\Logger;

class UserController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionSettings() {
        $this->render('_user_settings');
    }

    public function actionEditUserDataValidate() {
        $error = [];
        $last_name = trim($_POST['last_name']);
        $first_name = trim($_POST['first_name']);
        $middle_name = trim($_POST['middle_name']);
        $telephone = trim($_POST['telephone']);
        $country = trim($_POST['country']);
        $region = trim($_POST['region']);
        $district = trim($_POST['district']);
        $city = trim($_POST['city']);
        $post_code = trim($_POST['post_code']);
        $address = trim($_POST['address']);

        if (preg_match('/^[а-яёa-z]{1,}$/iu', $last_name) != true) {
            $error[] = 'Фамилия должна быть больше 1 символа. (a-я, a-z)!';
        }
        if (preg_match('/^[а-яёa-z]{1,}$/iu', $first_name) != true) {
            $error[] = 'Имя должно быть больше 1 символа. (a-я, a-z)!';
        }
        if (preg_match('/^[а-яёa-z]{1,}$/iu', $middle_name) != true) {
            $error[] = 'Отчество должно быть больше 1 символа. (a-я, a-z)!';
        }
        if (preg_match('/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/iu', $telephone) != true) {
            $error[] = 'Некорректный номер телефона!';
        }
        
        $address_error = false;
        if (preg_match('/^[а-яё\sa-z\-]{3,}$/iu', $country) != true) {
            $error[] = 'Название страны минимум 3 символа. (а-я, a-z, пробел, дефис)';
            $address_error = true;
        }
        if (preg_match('/^[а-яё\sa-z\-\.]{3,}$/iu', $region) != true) {
            $error[] = 'Название региона минимум 3 символа. (а-я, a-z, пробел, дефис, точка)';
            $address_error = true;
        }
        if (preg_match('/^[а-яё\sa-z\-\.]{3,}$/iu', $district) != true) {
            $error[] = 'Название района минимум 3 символа. (а-я, a-z, пробел, дефис, точка)';
            $address_error = true;
        }
        if (preg_match('/^[а-яё\sa-z\-\.]{3,}$/iu', $city) != true) {
            $error[] = 'Название населенного пункта минимум 3 символа. (а-я, a-z, пробел, дефис, точка)';
            $address_error = true;
        }
        if (preg_match('/^[\d]{6,10}$/iu', $post_code) != true) {
            $error[] = 'Почтовый индекс 6-10 цифр.';
            $address_error = true;
        }
        if (preg_match('/^[а-яё\sa-z0-9\/\,\.\-]{10,}$/iu', $address) != true) {
            $error[] = 'Улица, дом, квартира -  минимум 10 символа. (а-я, a-z, 0-9, пробел, дефис, точка, запятая, слеш(/))';
            $address_error = true;
        }
        if ($address_error) {
            $error[] = 'Необходимо заполнить адрес наиболее подробно, это нужно для доставки наградных материалов.';
        }

        if ($error) {
            echo json_encode(['status' => 'err', 'msg' => $error], JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode(['status' => 'success'], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionEditUserData() {
        $last_name = trim($_POST['last_name']);
        $first_name = trim($_POST['first_name']);
        $middle_name = trim($_POST['middle_name']);
        $telephone = trim($_POST['telephone']);
        $country = trim($_POST['country']);
        $region = trim($_POST['region']);
        $district = trim($_POST['district']);
        $city = trim($_POST['city']);
        $post_code = trim($_POST['post_code']);
        $address = trim($_POST['address']);

        try {
            $user = \app\models\User::find('first', [
                        'conditions' => ['id=?', $_SESSION['user']['id']]
            ]);
            $user->last_name = Helper::mb_ucfirst(mb_strtolower($last_name));
            $user->first_name = Helper::mb_ucfirst(mb_strtolower($first_name));
            $user->middle_name = Helper::mb_ucfirst(mb_strtolower($middle_name));

            $user->telephone = $telephone;
            $user->country = $country;
            $user->region = $region;
            $user->district = $district;
            $user->city = $city;
            $user->post_code = $post_code;
            $user->address = $address;

            if (!$user->save()) {
                throw new \Exception('Не удалось изменить персональные данные пользователя!');
            }

            $_SESSION['user'] = $user->attributes();
            Logger::log('Персональные данные успешно изменены.', 2, true);
            echo json_encode(['status' => 'success', 'msg' => ''], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log($ex->getMessage(), 1, true);
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

}
