<?php

namespace app\controllers;

use app\core\Controller;
use app\components\Helper;
use app\components\Logger;
use app\models\User;
use app\models\School;
use app\models\Mentor;

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
        if (preg_match('/^[а-яё\sa-z0-9\-\.]{3,}$/iu', $city) != true) {
            $error[] = 'Название населенного пункта минимум 3 символа. (а-я, a-z, 0-9, пробел, дефис, точка)';
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
            $user = User::find('first', [
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

    public function actionAddInstitutionValidate() {
        $error = [];
        $name = trim($_POST['name']);
        $country = trim($_POST['country']);
        $region = trim($_POST['region']);
        $district = trim($_POST['district']);
        $city = trim($_POST['city']);
        $post_code = trim($_POST['post_code']);
        $address = trim($_POST['address']);

        if (preg_match('/^[а-яё\sa-z0-9\-\.\"\№]{1,}$/iu', $name) != true) {
            $error[] = 'Наименование образовательного учреждения должно быть больше 1 символа. (a-я, a-z, 0-9, пробел, дефис, точка, двойные кавычки, №)!';
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
        if (preg_match('/^[а-яё\sa-z0-9\-\.]{3,}$/iu', $city) != true) {
            $error[] = 'Название населенного пункта минимум 3 символа. (а-я, a-z, 0-9, пробел, дефис, точка)';
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

    public function actionAddInstitution() {
        $name = trim($_POST['name']);
        $country = trim($_POST['country']);
        $region = trim($_POST['region']);
        $district = trim($_POST['district']);
        $city = trim($_POST['city']);
        $post_code = trim($_POST['post_code']);
        $address = trim($_POST['address']);

        try {
            $school = new School();
            $school->name = $name;
            $school->country = $country;
            $school->region = $region;
            $school->district = $district;
            $school->city = $city;
            $school->post_code = $post_code;
            $school->address = $address;
            $school->user_id = $_SESSION['user']['id'];

            if (!$school->save()) {
                throw new \Exception('Не удалось добавить образовательное учреждение!');
            }

            Logger::log('Добавлено образовательное учреждение.', 2, true);
            echo json_encode(['status' => 'success', 'school' => $school->attributes()], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log($ex->getMessage(), 1, true);
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionViewInstitutionListAjax() {

        try {
            $schools = School::find('all', [
                        'conditions' => ['user_id=?', $_SESSION['user']['id']]
            ]);

            $array_return = [];
            foreach ($schools as $school) {
                $array_return[] = [
                    'id' => $school->id,
                    'name' => $school->name . ', ' . $school->city,
                    'delete' => '<div class="button_ico float-right deleteinstitutionsButton" data-institutionsid="' . $school->id . '" data-toggle="tooltip" data-placement="top" title="Удалить учреждение">&#9932;</div>',
                    'edit' => '<div class="button_ico editInstitutionButton" data-institutionsid="' . $school->id . '" data-toggle="tooltip" data-placement="top" title="Редактировать учреждение">&#9999;</div>'
                ];
            }

            echo json_encode($array_return, JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log('ViewInstitutionListAjax(' . $_SESSION['user']['id'] . '). ' . $ex->getMessage(), 1, true);
            echo json_encode([]);
        }
    }

    public function actionDeleteInstitution() {
        $school_id = $_POST['deleteinstitutionId'];
        try {
            $school = School::find('first', [
                        'id' => ['id=?', $school_id]
            ]);
            if (!$school) {
                throw new \Exception('Образовательное учреждение не найдено!');
            }
            if (!$school->delete()) {
                throw new \Exception('Образовательное учреждение не удалось удалить!');
            }

            Logger::log('Удалено образовательное учреждение. ', 2, true);
            echo json_encode(['status' => 'success', 'msg' => 'good'], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log('DeleteInstitutionList(' . $school_id . '). ' . $ex->getMessage(), 1, true);
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionGetInstitutionAjax() {
        $school_id = $_POST['editinstitutionId'];
        try {
            $school = School::find('first', [
                        'id' => ['id=?', $school_id]
            ]);
            if (!$school) {
                throw new \Exception('Образовательное учреждение не найдено!');
            }
            echo json_encode(['status' => 'success', 'school' => $school->attributes()], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log('GetInstitutionAjax. ' . $ex->getMessage(), 1, true);
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionEditInstitution() {
        $school_id = $_POST['institution_id'];
        $name = trim($_POST['name']);
        $country = trim($_POST['country']);
        $region = trim($_POST['region']);
        $district = trim($_POST['district']);
        $city = trim($_POST['city']);
        $post_code = trim($_POST['post_code']);
        $address = trim($_POST['address']);

        try {
            $school = School::find('first', [
                        'id' => ['id=?', $school_id]
            ]);
            if (!$school) {
                throw new \Exception('Образовательное учреждение не найдено!');
            }
            $school->name = $name;
            $school->country = $country;
            $school->region = $region;
            $school->district = $district;
            $school->city = $city;
            $school->post_code = $post_code;
            $school->address = $address;
            $school->user_id = $_SESSION['user']['id'];

            if (!$school->save()) {
                throw new \Exception('Не удалось изменить образовательное учреждение!');
            }

            Logger::log('Изменено образовательное учреждение.', 2, true);
            echo json_encode(['status' => 'success', 'school' => $school->attributes()], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log($ex->getMessage(), 1, true);
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionAddMentorValidate() {
        $error = [];
        $last_name = trim($_POST['last_name']);
        $first_name = trim($_POST['first_name']);
        $middle_name = trim($_POST['middle_name']);
        $position = trim($_POST['position']);
        $school_id = trim($_POST['school_id']);

        if (preg_match('/^[а-яёa-z]{1,}$/iu', $last_name) != true) {
            $error[] = 'Фамилия должна быть больше 1 символа. (a-я, a-z)!';
        }
        if (preg_match('/^[а-яёa-z]{1,}$/iu', $first_name) != true) {
            $error[] = 'Имя должно быть больше 1 символа. (a-я, a-z)!';
        }
        if (preg_match('/^[а-яёa-z]{1,}$/iu', $middle_name) != true) {
            $error[] = 'Отчество должно быть больше 1 символа. (a-я, a-z)!';
        }
        if (preg_match('/^[а-яё\sa-z\-]{3,}$/iu', $position) != true) {
            $error[] = 'Название должности минимум 3 символа. (а-я, a-z, пробел, дефис)';
        }
        /* проверка школы */

        if ($error) {
            echo json_encode(['status' => 'err', 'msg' => $error], JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode(['status' => 'success'], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionAddMentor() {
        $last_name = trim($_POST['last_name']);
        $first_name = trim($_POST['first_name']);
        $middle_name = trim($_POST['middle_name']);
        $position = trim($_POST['position']);
        $school_id = trim($_POST['school_id']);

        try {
            $mentor = new Mentor();
            $mentor->last_name = $last_name;
            $mentor->first_name = $first_name;
            $mentor->middle_name = $middle_name;
            $mentor->position = $position;
            $mentor->school_id = $school_id;
            $mentor->user_id = $_SESSION['user']['id'];

            if (!$mentor->save()) {
                throw new \Exception('Не удалось добавить руководителя!');
            }

            Logger::log('Добавлен руководитель.', 2, true);
            echo json_encode(['status' => 'success', 'mentor' => $mentor->attributes()], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log($ex->getMessage(), 1, true);
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionViewMentorListAjax() {

        try {
            $mentors = Mentor::find('all', [
                        'conditions' => ['user_id=?', $_SESSION['user']['id']]
            ]);

            $array_return = [];
            foreach ($mentors as $mentor) {
                $array_return[] = [
                    'id' => $mentor->id,
                    'name' => $mentor->last_name . ' ' . $mentor->first_name . ' ' . $mentor->middle_name,
                    'delete' => '<div class="button_ico float-right deletementorsButton" data-mentorsid="' . $mentor->id . '" data-toggle="tooltip" data-placement="top" title="Удалить руководителя">&#9932;</div>',
                    'edit' => '<div class="button_ico editMentorButton" data-mentorsid="' . $mentor->id . '" data-toggle="tooltip" data-placement="top" title="Редактировать руководителя">&#9999;</div>'
                ];
            }

            echo json_encode($array_return, JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log('ViewMentorListAjax(' . $_SESSION['user']['id'] . '). ' . $ex->getMessage(), 1, true);
            echo json_encode([]);
        }
    }

    public function actionDeleteMentor() {
        $mentor_id = $_POST['deletementorId'];
        try {
            $mentor = Mentor::find('first', [
                        'id' => ['id=?', $mentor_id]
            ]);
            if (!$mentor) {
                throw new \Exception('Руководитель не найден!');
            }
            if (!$mentor->delete()) {
                throw new \Exception('Руководителя не удалось удалить!');
            }

            Logger::log('Удален руководитель. ', 2, true);
            echo json_encode(['status' => 'success', 'msg' => 'good'], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log('DeleteMentorList(' . $mentor_id . '). ' . $ex->getMessage(), 1, true);
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionGetMentorAjax() {
        $mentor_id = $_POST['editmentorId'];
        try {
            $mentor = Mentor::find('first', [
                        'id' => ['id=?', $mentor_id]
            ]);
            if (!$mentor) {
                throw new \Exception('Руководитель не найден!');
            }
            echo json_encode(['status' => 'success', 'mentor' => $mentor->attributes()], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log('GetMentorAjax. ' . $ex->getMessage(), 1, true);
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

    public function actionEditMentor() {
        $mentor_id = $_POST['mentor_id'];
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $position = $_POST['position'];
        $school_id = $_POST['school_id'];

        try {
            $mentor = Mentor::find('first', [
                        'id' => ['id=?', $mentor_id]
            ]);
            if (!$mentor) {
                throw new \Exception('Руководитель не найден!');
            }
            $mentor->last_name = $last_name;
            $mentor->first_name = $first_name;
            $mentor->middle_name = $middle_name;
            $mentor->position = $position;
            $mentor->school_id = $school_id;

            if (!$mentor->save()) {
                throw new \Exception('Не удалось изменить информацию руководителя!');
            }

            Logger::log('Информация руководителя изменена.', 2, true);
            echo json_encode(['status' => 'success', 'mentor' => $mentor->attributes()], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $ex) {
            Logger::log($ex->getMessage(), 1, true);
            echo json_encode(['status' => 'error', 'msg' => $ex->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }

}
