<?php
/**
* store.php
*
*
*
* @category   store.php
* @package    project 1
* @author     Mary Henry
* @version    2019.9.24
* @link       https://cislinux.hfcc.edu/~mehenry/p1/store.php
*/



?>


<main>
    <?php
echo "<table style='border: solid 1px black; color: darkseagreen;align: center;'>";
echo "<tr><th>Id</th><th>Product Name</th><th>Product Despcription</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;color:darkseagreen;'>" . parent::current(). "</td>";
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
    $stmt = $dbh->prepare("SELECT item_id, item_name, item_desc FROM product_records");
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
</main>

