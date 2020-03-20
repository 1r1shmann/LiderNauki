<?php

namespace app\models;

use app\core\Model;

class Userrule extends Model {

    static $table_name = 'users_rules';
    static $belongs_to = array('user');

}
