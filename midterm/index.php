
<?php

/**
 *
 *
 * Midterm
 *
 * @category   midterm
 * @package    Midterm
 * @author     Mary Henry
 * @version    2019.09.05
 * @link       https://cislinux.hfcc.edu/~mehenry/CIS222/midterm

 */

$servername = "localhost";
$db="mehenry";
$username = "mehenry";
$password = "samsvyzt";
$charset='utf8mb4';



$dbConn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

$result = $dbConn->query("SELECT * FROM midterm_animals ORDER BY id DESC");
?>

<head>
    <title>Midterm Animals</title>
</head>

<body>
<a href="add.php">Add Your Animal</a><br/><br/>

<table width='80%' border=0>

    <tr bgcolor='red'>

        <td>Type</td>
        <td>Breed</td>
        <td>Name</td>
        <td>Update</td>
    </tr>

    <?php
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>".$row['type']."</td>";
        echo "<td>".$row['breed']."</td>";
        echo "<td>".$row['animal_name']."</td>";
        echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    }
    ?>
</table>
</body>
