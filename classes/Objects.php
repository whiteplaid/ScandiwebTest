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
        $product = "Whiteplaid\\" . $property;
        $object = new $product();
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
            $object = "Whiteplaid\\" . $value->property;
            $product = new $object;
            $product->setSku($value->sku);
            $product->setName($value->name);
            $product->setPrice($value->price);
            $product->setSize($value->size);
            $product->setProperty($value->property);
            $products[$value->sku] = $product;

            echo "<td><div class='card ml8 border-r5'>
            <input type='checkbox' id='dcheck' value='$value->sku' class='delete-checkbox' name='sku[]'>";

            $product->toForm();
        }
        self::$objects = $products;
    }
}
