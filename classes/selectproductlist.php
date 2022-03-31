<?php
class SelectProductList extends Select {

       
    function getProducts () {
        $mysql = Database::$conn; 
        $query = "SELECT * FROM product,product_type WHERE product.property=product_type.type ORDER BY sku";
        $result = $mysql->query($query);
        return $result;
    }




}
?>