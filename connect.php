<?php

$servername = "localhost";
$username = "mehenry";
$password = "samsvyzt";
$db= "mehenry"


$conn = new mysqli($servername, $username, $password, $db);




$sql = "INSERT INTO contact (name, email, notes)
VALUES ('mary', 'ohn@example.com', 'shit')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

?>