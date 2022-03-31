<?php
class Product {
    private $sku = null;
    private $name = null;
    private $price = null;
    private $size = null;
    private $property = null;




    function getSku () {
        return $this->sku;
    }
    function getName () {
        return $this->name;
    }
    function getPrice () {
        return $this->price;
    }
    function getSize () {
        return $this->size;
    }
    function getProperty () {
        return $this->property;
    }
    function setSku ($sku) {
        $this->sku=$sku;
    }
    function setName ($name) {
        $this->name=$name;
    }
    function setPrice ($price) {
        $this->price=$price;
    }
    function setPropert ($property) {
        $this->property=$property;
    }
}
?>