<?php
class ProductType {

function getType () {
    $db = new Database();
    $mysql = $db->getConnection();
    $query = "SELECT * FROM product_type";
    $result = $mysql->query($query);
    return $result;
}
function readType ($id) {
    $db = new Database();
    $mysql = $db->getConnection();
    $query = "SELECT type FROM product_type WHERE id=$id";
    $result = $mysql->query($query);
    return $result->fetch_object()->type;
}
}
?>