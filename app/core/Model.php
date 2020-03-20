<?php

namespace app\core;
use app\core\Config;

class Model extends \ActiveRecord\Model {

    static $connection = Config::DB_MODE;

}
