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

    public function insert($sku, $name, $price, $size, $property)
    {
        if ($this->check($sku, $name, $price, $size)) {
            $mysql = self::$conn;
            $stmt = $mysql->prepare("INSERT INTO product (sku, name, price, size, property) VALUES (?,?,?,?,?)");
            $stmt->bind_param("sssss", $sku, $name, $price, $size, $property);
            $stmt->execute();
        }
    }

    private function check($sku, $name, $price, $size)
    {
        return  !(($sku == '' || $name == '' || $price == '' ||
            $size == '' || is_numeric($name) || !is_numeric($price)));
    }

    public function insertProduct($product)
    {
        if ($this->checkProduct($product)) {
            $mysql = self::$conn;
            $stmt = $mysql->prepare("INSERT INTO product (sku, name, price, size, property) VALUES (?,?,?,?,?)");
            $stmt->bind_param("sssss", $product->getSku(), $product->getName(), $product->getPrice(), $product->getSize(), $product->getProperty());
            $stmt->execute();
        }
    }

    private function checkProduct($product)
    {
        return !(($product->getSku() == '' || $product->getName() == '' || $product->getPrice() == '' ||
            $product->getSize() == '' || is_numeric($product->getName()) || !is_numeric($product->getPrice())));
    }

    public function deleteRow($sku)
    {
        $mysql = self::$conn;
        $query = "DELETE FROM product WHERE sku='$sku'";
        return $mysql->query($query);
    }
}
