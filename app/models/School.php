<?php

namespace app\models;

class School extends Model {
    static $table_name = 'user_schools';
    static $belongs_to = array('user');
}
