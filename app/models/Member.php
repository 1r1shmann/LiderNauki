<?php

namespace app\models;

class Member extends Model {

    static $table_name = 'user_members';
    static $belongs_to = array('user');
}
