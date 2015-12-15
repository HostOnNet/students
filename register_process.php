<?php

include ('./config.php');

if(isset($_POST['submit']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $father_name = $_POST['father_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT count(*) as total FROM `students` WHERE `username`='" . DB::quote($username) . "'";

    if (DB::getTotal($sql)) {
        die("User name  <b>$username</b> already in use");
    }

    $sql = "insert into `students` SET
                `first_name` ='". DB::quote($first_name) . "',
                `last_name`='". DB::quote($last_name) . "',
                `father_name`='". DB::quote($father_name) . "',
                `date_of_birth`='". DB::quote($date_of_birth) . "',
                `gender`='". DB::quote($gender) . "',
                `email`='". DB::quote($email) . "',
                `username`='". DB::quote($username) . "',
                `password`='". DB::quote($password) . "'";

    $result = DB::query($sql);

    Auth::login($username, $password);

    Header('Location: course.php');
    exit;

} else {
   die("Hacking attempt");
}
