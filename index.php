<?php
    session_name('LNSID');
    session_start();
    ini_set('display_errors', 1);
    require 'vendor/autoload.php';
    
    $router = new \App\Core\Router($_GET['url']);
