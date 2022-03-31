<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <link rel="stylesheet" href="/css/style.css">
    </head>
<body>
  
<?php
    require __DIR__."/config.php";
    require __DIR__."/blocks/header.php";
    $db = new Database();
    $o= new SelectProductList();
    $result = $o->getProducts();
    include('productlistform.php');
    require __DIR__.'/blocks/footer.php';
  ?>