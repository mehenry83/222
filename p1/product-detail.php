<?php
/**
 * product-detail.php
 *
 *
 *
 * @category   product-detail.php
 * @package    project 1
 * @author     Mary Henry
 * @version    2019.10.24
 * @link       https://cislinux.hfcc.edu/~mehenry/CIS222/p1
 *
 */


include 'head.php';
?>

<?php
include 'header.php';
?>

<?php
include 'nav_bar.php';
?>
<?php include "dbconfig.php";
        include  "connect.php";

$stmt = $pdo->query("SELECT item_name, item_desc, item_price, item_image FROM product_records WHERE item_id=1");
$row = $stmt->fetch()
        ?>


<main>


    <div class="container">
        <div class="row">
            <div class="col-xs-4 item-photo">
                <img style="max-width:100%;" src=<?php echo $row['item_image'] . "<br />\n";?>
            </div>
            <div class="col-xs-5" style="border:0px solid gray">

                <h1><?php echo $row['item_name']."<br>\n";?></h1>


                <h3 style="margin-top:0px;"><?php ?></h3>


                    <div>
                        <div class="attr2"> <?php echo $row['item_desc'] . "<br />\n";?></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="attr2"> <?php echo $row['item_price'] . "<br />\n";?></div>

                    </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="cart.php?id=$row[item_name]\">Add to Cart</a></button>
                </div>
              <div>
                </div>

                </div>
            </div>
        </div>
    </div>
