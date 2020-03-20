<?php

namespace app\components;

class Helper {

    public static function contollerFolderName($controllerName) {
        return str_ireplace('controller', '', $controllerName);
    }

    public static function mb_ucfirst($string, $enc = 'UTF-8') {
        return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) .
                mb_substr($string, 1, mb_strlen($string, $enc), $enc);
    }

}
