<?php
/**
 * contactus.php
 *
 *
 *
 * @category   contactus.php
 * @package    project 1
 * @author     Mary Henry
 * @version    2019.9.24
 * @link       https://cislinux.hfcc.edu/~mehenry/p1/contactus.php
 */

?>




	<main>
        <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>

      <?php


      if(isset($_POST["submit"]))


      try {
          include "connect.php";

      $dbh = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

    <p>Looking for something special? Bulk order? Let us know:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="old-telephone-01.jpg" style="width:20S%">
    </div>
    <div class="column">
      <form action="contactus.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." value="name">
        <label for="eamil">E-mail</label>
        <input type="text" id="email" name="email" placeholder="email address" value="email">
        <label for="subject">Subject</label>
        <select id="subject" name="subject">
          <option value="special orders"> Special Request & Bulk Orders</option>
          <option value="customer service">Customer Service</option>
          <option value="others">All Others</option>
        </select>
        <label for="notes">Let's us hear from you!</label>
        <textarea id="notes" name="notes" placeholder="Write something.." style="height:100% width:450%"></textarea>
        <input type="submit" name='submit' value="Submit">
      </form>
    </div>
  </div>
</div>
    </main>

