<?php
namespace Whiteplaid;

class Transaction extends Database
{

    public function getProducts()
    {
        $mysql = self::$conn;
        $query = "SELECT * FROM product ORDER BY sku";
        $result = $mysql->query($query);
        return $result;
    }
    private function check($sku, $name, $price, $size)
    {

        $result = ($sku == '' || $name == '' || $price == '' ||
            $size == '' || is_numeric($name) || !is_numeric($price)) ? false : true;
        return $result;
    }

    public function insert($sku, $name, $price, $size, $property)
    {
        if ($this->check($sku, $name, $price, $size)) {
            $mysql = self::$conn;
            $stmt = $mysql->prepare("INSERT INTO product (sku, name, price, size, property) VALUES (?,?,?,?,?)");
            $stmt->bind_param("sssss", $sku, $name, $price, $size, $property);
            $stmt->execute();
        }

    }
    public function deleteRow($sku)
    {
        $mysql = self::$conn;
        $query = "DELETE FROM product WHERE sku='$sku'";
        $result = $mysql->query($query);
        return $result;
    }
}
?>