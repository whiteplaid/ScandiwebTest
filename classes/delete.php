<?php
class Delete
{
    private $sku;

    function __construct($sku) {
        $this->sku=$sku;
    }
    function deleteRow()
    {
        $db = new Database();
        $mysql = $db->getConnection();
        $query = "DELETE FROM product WHERE sku='$this->sku'";
        $result = $mysql->query($query);
        return $result;
    }
}
?>