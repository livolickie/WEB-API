<?php
//Author: Livolickie
//http://www.youtube.com/c/HavingTeam
define('DB_HOST', ''); //Host name
define('DB_USER', ''); //Database username
define('DB_PASS', ''); //Database password
define('DB_NAME', ''); //Database name

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($connection == false) {
 mysqli_connect_error();
    exit();
}
?>