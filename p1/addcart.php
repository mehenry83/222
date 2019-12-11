<?php
include "connect.php";

$sql = "INSERT INTO `cart` (`product_recordsid`, `item_price`) VALUES (:product_recordid, :item_price)";
$statement = $pdo->prepare($sql);
$statement->bindValue(':make', 'Nissan');
$statement->bindValue(':model', 'Primera');

$add = $statement->execute();

if($add){
echo 'Added to cart!<br>';
}