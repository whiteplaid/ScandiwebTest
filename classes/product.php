<?php
namespace Whiteplaid;
abstract class Product
{
    private $sku;
    private $name;
    private $price;
    private $size;
    private $property;


    public function __construct($sku, $name, $price, $size, $property)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->property = $property;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getProperty()
    {
        return $this->property;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function setProperty($property)
    {
        $this->property = $property;
    }
}
?>