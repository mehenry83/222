
<?php
$servername = "localhost";
$db="mehenry";
$username = "mehenry";
$password = "samsvyzt";
$charset='utf8mb4';


$dbConn = new PDO("mysql:host=$servername;dbname=$db",$username,$password);

$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>