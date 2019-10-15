
<?php
include_once 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM midterm_animals WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

header("Location:index.php");
?>

