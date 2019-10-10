<?php
echo 'mary';
?>




<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Index</title>
    <meta name="midterm" content="midterm">
    <meta name="mary" content="Stuff">

    <link rel="stylesheet" href="">

</head>
<header>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="insert.php">Insert</a></li>
        <li><a href="add.php">Add</a></li>
        <li><a href="delete.php">Delete</a></li>
    </ul>
</header>


<body>
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$db="mehenry";
$username = "mehenry";
$password = "samsvyzt";
$charset='utf8mb4';


try {
    $dbh = new PDO("mysql:servername=$servername;dbname=$db", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $dbh->prepare("SELECT * FROM product_records");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
</body>
</html>
