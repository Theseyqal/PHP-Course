<?php
$productName = "   Wireless keyboard   ";
$price =49.987;
$quantity = 3 ;

$productName = trim($productName);
$productName = strtoupper($productName);

$total = $price * $quantity;
$total = number_format($total,2);

echo $productName ;
echo "<br>".$total;