<?php

require 'config.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `students` WHERE `username`='" . DB::quote($username) . "'";
    $user = DB::fetch1($sql);

    if (!$user) {
        $url = 'login.php?error=' . urldecode("User with user name <b>$username</b> not found");
        Header("Location: $url");
        exit;
    }

    if ($password != $user['password']) {
        $url = 'login.php?error=' . urldecode("Invalid Password");
        Header("Location: $url");
        exit;
    }

    Auth::login($username, $password);

    Header('Location: home.php');

}
