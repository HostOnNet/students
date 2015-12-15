<?php

require 'config.php';

Auth::check();

foreach ($_POST as $key => $value) {
    echo "$key<br>";
}
