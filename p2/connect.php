<?php
$servername = "localhost";
$username = "mehenry";
$password = "samsvyzt";
$db= "mehenry";

$con = new mysqli($servername, $username, $password, $db);
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}