<?php
echo 'mary';
?>
<?php
$servername = "localhost";
$db="mehenry";
$username = "mehenry";
$password = "samsvyzt";
$charset='utf8mb4';


try {


$dbh = new PDO("mysql:host=$servername;dbname=$db",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql ="DELETE FROM contact WHERE name='mary'";

    $dbh->exec($sql);

    $sql = "SELECT name FROM contact";
    $query = $dbh->prepare( $sql );
    $query->execute();
    $results = $query->fetchAll( PDO::FETCH_ASSOC );

    $dbh= null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}


?>



<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Index</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

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

/**
$servername = "localhost";
$db="mehenry";
$username = "mehenry";
$password = "samsvyzt";
$charset='utf8mb4';


try {


    $dbh = new PDO("mysql:host=$servername;dbname=$db",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql ="DELETE FROM contact WHERE name='mary'";

    $dbh->exec($sql);
    echo "Record deleted successfully";

    $dbh= null;
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

*/
?>
</body>
</html>
