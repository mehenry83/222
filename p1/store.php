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






include "dbconfig.php";
include  "connect.php";

$stmt = $pdo->query("SELECT item_id, item_name, item_desc, item_price, item_image FROM product_records");
$row = $stmt->fetch();

?>


<div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src=<?php echo $row['item_image'] . "<br />\n";?>
                        <div class="card-body">
                            <p class="card-text"><?php echo $row['item_desc'] . "<br />\n";?></p>
                        <p class="card-text"><?php echo $row['item_price'] . "<br />\n";?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="product-detail.php">Product Details</a></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="cart.php">Add to Cart</a></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>

<?php
$stmt = $pdo->query("SELECT item_id, item_name, item_desc, item_price, item_image FROM product_records WHERE item_id=2");
$row = $stmt->fetch();

?>


<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src=<?php echo $row['item_image'] . "<br />\n";?>
                    <div class="card-body">
                    <p class="card-text"><?php echo $row['item_desc'] . "<br />\n";?></p>
                    <p class="card-text"><?php echo $row['item_price'] . "<br />\n";?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="product-detail.php">Product Details</a></button>
                           <form action="addcart.php"><button type="button" class="btn btn-sm btn-outline-secondary"><a href="cart.php">Add to Cart</a></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>


