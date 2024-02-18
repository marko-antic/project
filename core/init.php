<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'adminuser',
        'password' => 'Marko_123',
        'db' => 'project'
    ),
    'remeber' => array(
        'cookie_name' =>'remember_me',
        'cookie_expire' => 604800
    ),
    'session' => array(
        'session_name' => 'user'
    )   

);
    spl_autoload_register(function($class) {
        include_once 'classes/'. $class . '.php';
    });
    require_once 'functions/sanitize.php';
?>