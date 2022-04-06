<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<?php
require __DIR__ . "/autoloader.php";
require __DIR__ . "/views/header.php";

$db = new Whiteplaid\Database;
$productList = new Whiteplaid\Transaction;
$result = $productList->getProducts();

include('views/productListForm.php');
require __DIR__ . '/views/footer.php';
?>