<?php
    session_name('LNSID');
    session_start();
//    ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
//    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    
    require 'vendor/autoload.php';
    
    $config = include(dirname(__FILE__) . '/app/core/Config.php');
    
    \ActiveRecord\Config::initialize(function($cfg) use ($config)
    {
        $cfg->set_connections($config['db']);
    });
    

    
    $url = isset($_GET['LNRouter']) ? $_GET['LNRouter'] : '';
    $router = new App\Core\Router($url, $config);