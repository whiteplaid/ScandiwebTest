<link rel="stylesheet" href="css\style.css">
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="js/check.js"></script>
<script src="js/t.js"></script>
<title>Product Add</title>
<nav class="d-flex card-header">
  <h3 class="my-0 ml4">Product Add</h5>
</nav>
<form id="product_form" action="/i">
<table>
        <tr class = 'p34'>
        <td class="b"><button type='submit'  class='button' id='save-product-btn' name='Save' value='Save' onclick='t()'>SAVE</button></td>
        <td class="b"><button type='button' class='button' name="CANCEL" onclick="window.location.href='/'">CANCEL</button></td>
        </tr>
    </table>
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

</form>



<?php require __DIR__.'/blocks/footer.php'?>
