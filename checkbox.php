<?php
require __DIR__.'/config.php';
foreach($_POST['sku'] as $sku) {
    $deleteRow = new Delete($sku);
    $deleteRow->deleteRow();
}

header('Location: /');
?>