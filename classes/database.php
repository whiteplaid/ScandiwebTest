<?php
class Database {
    private $host = 'localhost';
    private $db = 'product_list';
    private $user = 'root';
    private $pass = '';
    public static $conn;

    function __construct() {
        self::$conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
    }

    public function getConnection () {  
        return self::$conn;
    }

    function fetchObjects ($result,$nclass) {
        while ($object = $result->fetch_object($nclass)){
            $objects[]=$object;
        }
        return $objects;
    }
    function readSku ($sku) {
        $query = "SELECT sku FROM product WHERE sku='$sku'";
        $result = self::$conn->query($query)->fetch_object();
        $r = ($result == null)? '' : $result->sku;
        return print_r($r);
    }

}
?>