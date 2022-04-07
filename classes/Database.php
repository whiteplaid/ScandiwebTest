<?php

namespace Whiteplaid;

use mysqli;

class Database
{
    public static $conn;
    private $host = 'localhost';
    private $db = 'product_list';
    private $user = 'root';
    private $pass = '';

    public function __construct()
    {
        self::$conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function getConnection()
    {
        return self::$conn;
    }

    public function readSku($sku)
    {
        $query = "SELECT sku FROM product WHERE sku='$sku'";
        $result = self::$conn->query($query)->fetch_object();
        $r = ($result == null) ? '' : $result->sku;
        return print_r($r);
    }
}
