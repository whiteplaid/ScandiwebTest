function t() {
    
    $("#product_form").on('submit',function (e) {
        //e.preventDefault();
      var sku = $('#sku').val();
      var name = $('#name').val();
      var price = $('#price').val();
      var size = $('#size').val() || $('#weight').val() || ($('#height').val() + 'x' + $('#width').val() + 'x' + $('#length').val());
      var property = $('#productType').val();

      $.ajax ({
              type: 'POST',
              url: '/saveproduct',
              data: {sku: sku, name: name, price: price, size: size, property: property},
              success: function(response) {
                  //alert(response);
              }
          })
      
    })
 }