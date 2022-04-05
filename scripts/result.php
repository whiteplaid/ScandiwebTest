<?php
include_once dirname(__DIR__) . '/autoloader.php';
if (isset($_POST["id"]) && $_POST["id"] != 'default') {
  $selected = $_POST["id"];
  $form = new Whiteplaid\Form;
  $form->createForm($selected);
}
?>
