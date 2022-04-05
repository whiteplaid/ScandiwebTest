<?php
include_once dirname(__DIR__) . '/autoloader.php';
$sku = $_POST['sku'];
$name = $_POST['name'];
$size = $_POST['size'];
$price = $_POST['price'];
$property = $_POST['property'];

$db = new Whiteplaid\Transaction;
$db->insert($sku, $name, $price, $size, $property);
?>