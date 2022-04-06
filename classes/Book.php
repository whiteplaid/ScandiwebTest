<?php

namespace Whiteplaid;

class Book extends Product
{

    private $weight;

    public function __construct()
    {
    }

    public function toForm()
    {
        echo "<ul class='list-unstyled'>";
        echo "<li>";
        echo $this->getSku();
        echo "</li>";
        echo "<li>";
        echo $this->getName();
        echo "</li>";
        echo "<li>";
        echo $this->getPrice() . " $";
        echo "</li>";
        echo "<li>";
        echo "Weight: " . $this->getWeight() . " Kg";
        echo "</li>";
        echo "</ul>";
        echo "</div></td>";
    }

    public function getWeight()
    {
        return $this->getSize();
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}