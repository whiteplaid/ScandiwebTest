<?php
include_once dirname(__DIR__) . '/autoloader.php';
$sku = $_POST['sku'];
$name = $_POST['name'];
$size = $_POST['size'];
$price = $_POST['price'];
$property = $_POST['property'];

$arrayObj = array(
    "DVD" => new Whiteplaid\DVD,
    "Book" => new Whiteplaid\Book,
    "Furniture" => new Whiteplaid\Furniture
);

$product = $arrayObj[$property];
$product->setSku($sku);
$product->setName($name);
$product->setPrice($price);
$product->setSize($size);
$product->setProperty($property);
$db = new Whiteplaid\Transaction;
//$db->insert($sku, $name, $price, $size, $property);
$db->insertProduct($product);
?>