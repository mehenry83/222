
<?php

include "dbconfig.php";
include  "connect.php";




if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $messeg = "";

    if(empty($email) || empty($pass)) {
        $messeg = "Username/Password con't be empty";
    } else {
        $stmt = $pdo->query("SELECT password, email FROM customers");
        $row = $stmt->fetch()
        ($stmt->rowCount() >= 1);
        {
            $_SESSION['email'] = $email;
            header("location:index.php");
        }
    }
}

?>