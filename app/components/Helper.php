<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Components;

/**
 * Description of Helper
 *
 * @author control
 */
class Helper {

    public static function contollerFolderName($controllerName) {
        return str_ireplace('controller', '', $controllerName);
    }

}
