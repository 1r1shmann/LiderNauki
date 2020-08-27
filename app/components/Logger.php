<?php

namespace app\components;

use app\models\Log;

class Logger {
    /**
     * Пишет в лог
     * @param string $message string
     * @param integer $level 1 - Error, 2 - Info, 3 - Debug
     * @param boolean $request
     */
    public static function log($message, $level = 2, $request = false) {
        $record = new Log();
        $record->level = $level;
        $record->user_id = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 1;
        $record->request_url = $_SERVER['REQUEST_URI'];
        $record->request = (!isset($_SESSION['user']['id']) || $request) ? print_r($_REQUEST, true) : NULL;
        $record->message = $message;
        $record->user_ip = $_SERVER["REMOTE_ADDR"];
        $record->user_agent = $_SERVER["HTTP_USER_AGENT"];
        $record->save();
        
    }

}
