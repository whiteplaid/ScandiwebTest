<?php
require_once __DIR__.'/config.php';

  if(isset($_POST["id"]) && $_POST["id"] != 'default'){
    $selected=$_POST["id"];
      $f = new Form($selected);
      $result = $f->createForm();
   };
?>
