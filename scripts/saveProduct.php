<?php
include_once dirname(__DIR__) . '/autoloader.php';
$sku = $_POST['sku'];
$name = $_POST['name'];
$size = $_POST['size'];
$price = $_POST['price'];
$property = $_POST['property'];

$objects = new Whiteplaid\Objects;
$product = $objects::addObject($sku, $name, $price, $size, $property);
$db = new Whiteplaid\Transaction;
$db->insertProduct($product);
