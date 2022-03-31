<?php
include_once __DIR__.'/config.php';
$sku = $_POST['sku'];
$name = $_POST['name'];
$size = $_POST['size'];
$price = $_POST['price'];
$property = $_POST['property'];

$p = new ProductType();
$type = $p->readType($property);
$db = new AddProduct($sku,$name,$price,$size,$type);
?>