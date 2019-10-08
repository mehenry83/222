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
    $result = $db->("SELECT `item_id`, `item_name`, `item_price`FROM product_records");
    $result->excute($db);
    ?>
    <?php foreach($result->fetch(PDO::FETCH_ASSOC) as $row) : ?>
        <tr>
            <td><?php echo $row['item_id']; ?></td>
            <td><?php echo $row['item_name']; ?></td>
            <td><?php echo $row['item_price']; ?></td>
        </tr>
    <?php endforeach;?>
    </table>






</main>

    <?php
    include 'footer.php';
    ?>
</body>
</html>