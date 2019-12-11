<?php
include "connect.php";



$stmt = $pdo->prepare('SELECT * FROM product_records ORDER BY item_id');
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo $product;