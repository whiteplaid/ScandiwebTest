<?php
    class Objects {
        public static $objects;

       public function __construct($objects) {
            self::$objects=$objects;
        }
        public static function getObject ($id) {
            $result=null;
            foreach(self::$objects as $obj) {
                if ($obj->getSku() == $id) {
                    $result=$obj;
                }
            }
            return $result;
        }
    }
?>