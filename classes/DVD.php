<?php

namespace Whiteplaid;

class DVD extends Product
{
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
        echo "Size: " . $this->getSize() . " MB";
        echo "</li>";
        echo "</ul>";
        echo "</div></td>";
    }
}
