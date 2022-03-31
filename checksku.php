<?php
include_once __DIR__."/classes/database.php";
if (isset($_POST['sku'])) {
   $db = new Database();
   $sku = $_POST['sku'];
   $db->readSku($sku);
}
?>