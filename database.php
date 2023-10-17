<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "user-registration";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName , 3306);
if (!$conn) {
    die("Something went wrong;");
}

?>