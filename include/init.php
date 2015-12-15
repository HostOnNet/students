<?php

session_start();

require 'include/DB.php';
require 'include/Auth.php';

DB::connect('localhost', DB_USER, DB_PASSWORD, DB_NAME);

function dd($var) {
    echo '<pre>';
    print_r($var);
    exit;
}
