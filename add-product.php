<link rel="stylesheet" href="css\style.css">
<title>Product Add</title>
<nav class="d-flex card-header">
  <h3 class="my-0 ml4">Product Add</h5>
  <div class="d-flex sl mt1 mr4">
    <a class="button-del p3" href="/">CANCEL</a>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="js/check.js"></script>
<script src="js/t.js"></script>
<form id="product_form" action="/i">
    <table class='card mt5 ml4'>
        <tr><td>SKU</td> <td><input type='text' name='sku' id='sku' placeholder='type sku id'></td></tr>
        <tr><td></td> <td><p class="error" id="esku"></p></td></tr>
        <tr><td>Name</td> <td><input type='text' name='name' id='name' placeholder='type name of the product'></td></tr>
        <tr><td></td> <td><p class="error" id="ename"></p></td></tr>
        <tr><td>Price ($)</td> <td><input type='text' name='price' id='price' placeholder='type price of the product'></td></tr>
        <tr><td></td> <td><p class="error" id="eprice"></p></td></tr>
    </table>
    <table class='card mt5 ml4'>
        <tr><td>Type Switcher</td>
        <td>
        
                <select name="pid" id="productType">
                <option value="default">Select type of product</option>
                <option value="1">DVD</option>
                <option value="2">Book</option>
                <option value="3">Furniture</option>       
                </select>
            </td>
        </tr>
    </table>

    <div id='dynamic'></div>
  
<button type='submit'  class='button p34' id='save-product-btn' name='Save' value='Save' onclick='t()'>SAVE</button>
</form>



<?php require __DIR__.'/blocks/footer.php'?>
