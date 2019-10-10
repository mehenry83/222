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
<html>
    <?php
    include 'head.php';
    ?>

    <?php
    /**
     include_once "connect.php";

     $dbh = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
     $result = $db->("SELECT `item_id`, `item_name`, `item_price`FROM product_records");
    $result->execute($db);
    ?>
    <?php
    foreach($result->fetch(PDO::FETCH_ASSOC) as $row) :
    $dbh = null;
    ?>

    <table>
    <tr>
        <td><?php echo $row['item_id']; ?></td>
        <td><?php echo $row['item_name']; ?></td>
        <td><?php echo $row['item_price']; ?></td>
    </tr>

    </table>



    */ ?>


<body>
    <?php
    include 'header.php';
    include 'nav_bar.php';
    ?>

<main role="main">
</main>

    <?php
    include 'footer.php';
    ?>
</body>
</html>