<?php

class Auth {

    public static function login($user, $password) {
        $_SESSION['CURRENT_USER'] = $user;
        $_SESSION['CURRENT_USER_PW'] = $password;
    }

    public static function check() {
        if (isset($_SESSION['CURRENT_USER']) && isset($_SESSION['CURRENT_USER_PW'])) {

        } else {
            Header('Location: login_error.php');
            exit;
        }
    }

    public static function getUser() {
        $sql = "SELECT * FROM `students` WHERE `username`='" . $_SESSION['CURRENT_USER'] . "'";
        return DB::fetch1($sql);
    }
} 
