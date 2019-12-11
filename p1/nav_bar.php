<?php
/**
 * nav_bar.php
 *
 *
 *
 * @category   nav_bar
 * @package    project 1
 * @author     Mary Henry
 * @version    2019.9.24
 * @link       https://cislinux.hfcc.edu/~mehenry/p1
 */



echo '<ul class="nav">
      <li><a href="?page=index">Home</a></li>
      <li><a href="?page=aboutus">About</a></li>
      <li><a href="?page=store">Current Items</a></li>
      <li><a href="?page=contactus">Contact Us</a></li>
      <li>
      
      <class="login-container">
    <form method="POST" action="login.php">
      <input type="text"  id="email" placeholder="email" name="email">
      <input type="text" id="password" placeholder="password" name="password">
      <button type="submit" value="login">Login</button>
    </form></li></ul>
    
  ';
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






