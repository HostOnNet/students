<?php

require 'config.php';

Auth::check();

$courses = $_POST['course'];
$courses = implode(',' , $courses);

$sql = "UPDATE `students` SET
               `courses` ='". DB::quote($courses) . "' where
               `username` = '" . DB::quote($_SESSION['CURRENT_USER']) . "'";

DB::query($sql);

Header("Location: home.php");
