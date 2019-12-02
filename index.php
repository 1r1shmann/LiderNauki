<?php

    ini_set('display_errors', 1);
    require 'vendor/autoload.php';
    
    $router = new \App\Core\Router($_GET['url']);
