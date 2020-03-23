<?php
    session_name('LNSID');
    session_start();
    //    ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
    //    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    require 'vendor/autoload.php';

    $db_conf = app\core\Config::DB;
    \ActiveRecord\Config::initialize(function($cfg) use ($db_conf) {
        $cfg->set_connections($db_conf);
    });

    $url = isset($_GET['LNRouter']) ? $_GET['LNRouter'] : '';
    $router = new app\core\Router($url);