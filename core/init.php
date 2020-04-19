<?php

session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'lr'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_epiry' => 604800 // month in seconds
    ),
    'session' => array(
        'session_name' => 'user'
    )
    
);

// Class files autoload
spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';