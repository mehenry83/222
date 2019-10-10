
<?php
$servername = "localhost";
$db="mehenry";
$username = "mehenry";
$password = "samsvyzt";
$charset='utf8mb4';

try {
    $dbn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $dbn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}


catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
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
        </ul>';
    </header>


    <body>
    </body>
    </html>
<?php
