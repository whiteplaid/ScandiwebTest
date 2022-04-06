<?php
$objects = array();

while ($object = $result->fetch_object()) {
    $objects[$object->sku] = $object;
}
$reader = new Whiteplaid\Objects($objects);
$reader->initializeProducts();