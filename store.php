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
    include_once  "connect.php";
    ?>
<body>
    <?php
    include 'header.php';
    include 'nav_bar.php';
    ?>

<main role="main">
    <?php include_once "connect.php";
    $result = $db->prepare("SELECT `item_id`, `item_name`, `item_price`FROM product_records");
    $result->execute();
    ?>
    <?php foreach($result->fetch(PDO::FETCH_ASSOC) as $row) : ?>
        <tr>
            <td><?php echo $row['field1']; ?></td>
            <td><?php echo $row['field2']; ?></td>
            <td><?php echo $row['field3']; ?></td>
            <td><?php echo $row['field4']; ?></td>
            <td><?php echo $row['field5']; ?></td>
        </tr>
    <?php endforeach;?>
    </table>



    ?>


</main>

    <?php
    include 'footer.php';
    ?>
</body>
</html>