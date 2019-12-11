<html>
<head>
    <link rel="stylesheet" href="style/marthamyrtle.css">
</head>
<?php
session_start();
include('connect.php');
$status="";
if (isset($_POST['item_name']) && $_POST['item_name']!=""){
    $item_name = $_POST['item_name'];
    $result = mysqli_query(
        $con,
        "SELECT * FROM product_records WHERE item_id='2'"
    );
    $row = mysqli_fetch_assoc($result);
    $item_name = $row['item_name'];
    $item_desc = $row['item_desc'];
    $item_price = $row['item_price'];


    $cartArray = array(
        $item_name=>array(
            'item_name'=>$item_name,
            'item_desc'=>$item_desc,
            'item_price'=>$item_price,
            'quantity'=>1,
    )
    );

    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($item_name,$array_keys)) {
            $status = "<div class='box' style='color:red;'>
 Product is already added to your cart!</div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge(
                $_SESSION["shopping_cart"],
                $cartArray
            );
            $status = "<div class='box'>Product is added to your cart!</div>";
        }

    }
}
?>
<?php
if(!empty($_SESSION["shopping_cart"])) {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
    ?>
    <div class="cart_div">
        <a href="cart.php"><img src="" /> Cart<span>
<?php echo $cart_count; ?></span></a>
    </div>
    <?php
}
?>
<?php
$result = mysqli_query($con,"SELECT * FROM `product_records`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <div class='item_name'>".$row['item_name']."</div>
    <div class='item_price'>$".$row['item_price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
}
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
</div>
