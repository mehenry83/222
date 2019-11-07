<?php

$servername = "localhost";
$db="mehenry";
$username = "mehenry";
$password = "samsvyzt";
$charset='utf8mb4';



$dbConn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

if(isset($_POST['update']))
{
    $id = $_POST['id'];

$type=$_POST['type'];
$breed=$_POST['breed'];
$animal_name=$_POST['animal_name'];

$sql = "UPDATE midterm_animals SET type=:type, breed=:breed, animal_name=:animal_name WHERE id=:id";
$query = $dbConn->prepare($sql);

$query->execute(array(':type' => $type, ':breed' => $breed, ':animal_name' => $animal_name));

header("Location: index.php");

}
?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM midterm_animals WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $type = $row['type'];
    $breed = $row['breed'];
    $animal_name = $row['animal_name'];
}
?>
<html>
<head>
    <title>Edit Your Animal</title>
</head>

<body>
<a href="index.php">Home</a>
<br/><br/>

<form name="form1" method="POST" action="edit.php">
    <table border="0">
        <tr>
            <td>Type</td>
            <td><input type="text" name="Type" value="<?php echo $type;?>"></td>
        </tr>
        <tr>
            <td>Breed</td>
            <td><input type="text" name="Breed" value="<?php echo $breed;?>"></td>
        </tr>
        <tr>
            <td>Animal Name</td>
            <td><input type="text" name="Animal Name" value="<?php echo $animal_name;?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update"  value="update"></td>
        </tr>
    </table>
</form>
</body>
</html>