<?php
require_once 'core/init.php';


$user = DB::getInstance()->update('users', 5, array(
    'username' => 'Dale',
    'password' => 'new pass',
    'salt' => 'new salt'
));
