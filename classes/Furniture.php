<?php
namespace Whiteplaid;

class Furniture extends Product
{

    private $dimensions;

    public function __construct()
    {
    }

    public function getDimensions()
    {
        return $this->getSize();
    }

    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
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
        echo "Dimensions: " . $this->getDimensions() . " CM";
        echo "</li>";
        echo "</ul>";
        echo "</div></td>";
    }
}
?>