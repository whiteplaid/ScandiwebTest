<?php

namespace Whiteplaid;

class Objects
{

    public static $objects;

    public function __construct(array $objects = array())
    {
        self::$objects = $objects;
    }

    public static function getObjectBySku($sku)
    {
        return array_key_exists($sku, self::$objects) ? self::$objects[$sku] : null;
    }

    public static function addObject($sku, $name, $price, $size, $property)
    {
        $products = array();
        $arrayObj = array(
            "DVD" => new DVD,
            "Book" => new Book,
            "Furniture" => new Furniture
        );

        $object = $arrayObj[$property];
        $object->setSku($sku);
        $object->setName($name);
        $object->setPrice($price);
        $object->setSize($size);
        $object->setProperty($property);
        $products[$property] = $object;
        self::$objects = $products;
        return $object;
    }

    public function initializeProducts()
    {
        $products = null;
        foreach (self::$objects as $value) {
            $property = $value->property;
            $product = $this->$property($value);
            $products[$value->sku] = $product;

            echo "<td><div class='card ml8 border-r5'>
            <input type='checkbox' id='dcheck' value='$value->sku' class='delete-checkbox' name='sku[]'>
            </input>";

            $product->toForm();
        }
        self::$objects = $products;
    }

    private function DVD($value)
    {
        $product = new DVD();
        $product->setSku($value->sku);
        $product->setName($value->name);
        $product->setPrice($value->price);
        $product->setSize($value->size);
        $product->setProperty($value->property);
        return $product;
    }

    private function Book($value)
    {
        $product = new Book();
        $product->setSku($value->sku);
        $product->setName($value->name);
        $product->setPrice($value->price);
        $product->setSize($value->size);
        $product->setProperty($value->property);
        return $product;
    }

    private function Furniture($value)
    {
        $product = new Furniture();
        $product->setSku($value->sku);
        $product->setName($value->name);
        $product->setPrice($value->price);
        $product->setSize($value->size);
        $product->setProperty($value->property);
        return $product;
    }

}