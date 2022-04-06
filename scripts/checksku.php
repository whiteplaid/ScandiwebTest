<?php
include_once dirname(__DIR__) . '/autoloader.php';
if (isset($_POST['sku'])) {
    $db = new Whiteplaid\Transaction;
    $sku = $_POST['sku'];
    $db->readSku($sku);
}