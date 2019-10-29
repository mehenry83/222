
<div class="container">
  <div style="text-align:center">
    <h2>Add an Animal</h2>
      <?php

      if(isset($_POST["submit"]))


      try {
      include_once "connect.php";
      $sql = "INSERT INTO midterm_animals (type, breed, animal_name)
      VALUES ('".$_POST["type"]."','".$_POST["breed"]."','".$_POST["animal_name"]."')";
      if ($dbConn->query($sql)) {
      echo "<script type= 'text/javascript'>alert('Thank You for adding your animal');</script>";
      }
      else{
      echo "<script type= 'text/javascript'>alert('Oops.');</script>";
      }

      $dbConn = null;
      }
      catch(PDOException $e)
      {
      echo $e->getMessage();
      }


      ?>

    <p>Add an animal</p>
  </div>
  <div class="row">
    <div class="column">
    </div>
    <div class="column">
      <form action="add.php" method="POST">
        <label for="type">Type</label>
        <input type="text" id="type" name="type" placeholder="Your name.." value="type">
        <label for="breed">breed</label>
        <input type="text" id="breed" name="breed" placeholder="breed" value="breed">
        <label for="animal_name">animal name</label>
        <input type="text" id="animal_name" name="animal_name" placeholder="name.." value="animal_name">
        <input type="submit" name='submit' value="Submit">
      </form>
    </div>
  </div>
</div>

    <a href="index.php">Back.</a>
    </main>
</body>
</html>