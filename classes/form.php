<?php
class Form {
    private $id;

    function __construct($id) {
        $this->id=$id;
    }
    function createForm () {
        $id=$this->id;
        $query="SELECT type FROM product_type WHERE id=$id";
        new Database();
        $result = Database::$conn->query($query);
        $name = $result->fetch_object();
        $type = $name->type;
        $this->$type();


    }
    private function DVD () {
   
             echo "<table class='card mt5 ml4'>
              <tr><td>Size (MB):</td><td><input type='text' id='size'></td></tr>
              <tr><td></td><td><div id='msize'></div></td></tr>
              <tr></tr>
              <tr><td><p>Please, provide size of the disc</p></td></tr>
             </table>";
            
             
    }

    private function Book () {
        echo "<table class='card mt5 ml4'>
              <tr><td>Weight (Kg):</td><td><input type='text' id='weight'></td></tr>
              <tr><td></td><td><div id='mweight'></div></td></tr>
              <tr></tr>
              <tr><td><p>Please, provide weight of the book</p></td></tr>
              </table>";
    }
    
    private function Furniture () {
      echo "<table class='card mt5 ml4'>
                <tr><td>Height (CM):</td><td><input type='text' id='height'></td></tr>
                <tr><td></td><td><div id='mheight'></div></td></tr>
                <tr><td>Width (CM):</td><td><input type='text' id='width'></td></td>
                <tr><td></td><td><div id='mwidth'></div></td></tr>
                <tr><td>Lenght (CM):</td><td><input type='text' id='length'></td></tr>
                <tr><td></td><td><div id='mlength'></div></td></tr>
                <tr></tr>
                <tr></tr>
                <tr><td><p>Please, provide dimensions</p></td></tr>
            </table>";
        
    }
}
?>