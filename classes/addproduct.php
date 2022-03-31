<?php
class AddProduct extends Product {

    private $sku;
    private $name;
    private $price;
    private $size;
    private $property;

    function __construct($sku,$name,$price,$size,$property) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->property = $property;
        $this->insert();
    }

    function check(){
        $result = ($this->sku == '' || $this->name == '' || $this->price == '' || $this->size == '' || is_numeric($this->name) || !is_numeric($this->price)) ? false : true;
        return $result; 
    }

    function insert() {
        if ($this->check()) {    
        $db = new Database();
        $mysql = $db->getConnection();
        $stmt = $mysql->prepare("INSERT INTO product (sku,name,price,size,property) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$this->sku,$this->name,$this->price,$this->size,$this->property);
        $stmt->execute();
        }

    }
}
?>