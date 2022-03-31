<?php
abstract class AbstractForm {
    private $id;

    function __construct($id) {
        $this->id=$id;
    }
    function createForm () {}

}
?>