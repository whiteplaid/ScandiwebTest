<?php
include_once dirname(__DIR__) . '/autoloader.php';
foreach ($_POST['sku'] as $sku) {
    $deleteRow = new Whiteplaid\Transaction;
    $deleteRow->deleteRow($sku);
}

header('Location: /');