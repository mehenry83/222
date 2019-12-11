


<?php session_start($_POST);

include "dbconfig.php";
include  "connect.php";

$stmt = $pdo->query("SELECT * FROM cart where id=1");
$row = $stmt->fetch();






