<?php

namespace app\models;

use app\core\Model;

class User extends Model {

    static $table_name = 'users';
    static $primary_key = 'id';
    static $has_many = array('userrules');

    public function checkAccessRule($rule_name) {
        $flag = false;
        foreach ($this->userrules as $rule) {
            if ($rule->rule_name === $rule_name) {
                $flag = true;
                break;
            }
        }
        return $flag;
    }

}
