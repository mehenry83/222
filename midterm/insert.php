<?php

/**
 * insert.php
 *
 *
 *
 * @category   insert.php
 * @package    Midterm
 * @author     Mary Henry
 * @version    2019-10-10
 * @link       https://cislinux.hfcc.edu/~mehenry/midterm/insert.php
 */

?>

<!DOCTYPE html>
<html>
   <body>



	<main>
        <div class="container">
  <div style="text-align:center">
    <h2>Insert</h2>
      <?php
      $servername = "localhost";
      $db="mehenry";
      $username = "mehenry";
      $password = "samsvyzt";
      $charset='utf8mb4';


      if(isset($_POST["submit"]))


      try {
      $dbh = new PDO("mysql:servername=$servername;dbname=$db",$username,$password);

      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
      $sql = "INSERT INTO contact (name, email, notes)
      VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["notes"]."')";
      if ($dbh->query($sql)) {
      echo "<script type= 'text/javascript'>alert('Thank You. We will reach you as soon as possible.');</script>";
      }
      else{
      echo "<script type= 'text/javascript'>alert('Oops.');</script>";
      }

      $dbh = null;
      }
      catch(PDOException $e)
      {
      echo $e->getMessage();
      }


      ?>

    <p>title of page</p>
  </div>
  <div class="row">
    <div class="column">
    </div>
    <div class="column">
      <form action="insert.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." value="name">
        <label for="eamil">E-mail</label>
        <input type="text" id="email" name="email" placeholder="email address" value="email">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." value="name">
        <label for="notes">Let's us hear from you!</label>
        <textarea id="notes" name="notes" placeholder="Write something.." style="height:100% width:450%"></textarea>
        <input type="submit" name='submit' value="Submit">
      </form>
    </div>
  </div>
</div>
    </main>
</body>
</html>