<?php
$arrayObj = array(
    "DVD" => new Whiteplaid\DVD,
    "Book" => new Whiteplaid\Book,
    "Furniture" => new Whiteplaid\Furniture
);

while ($object = $result->fetch_object()) {
    $obj = $arrayObj[$object->property];
    $obj->setSku($object->sku);
    $obj->setName($object->name);
    $obj->setPrice($object->price);
    $obj->setSize($object->size);
    $obj->setProperty($object->property);

    echo "<td><div class='card ml8 border-r5'>";
    echo "<input type='checkbox' id='dcheck' value='$object->sku' class='delete-checkbox' name='sku[]'>";
    echo "</input>";

    $obj->toForm();
}
?>