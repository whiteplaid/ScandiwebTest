$(function () {
    $("#sku").change(function () {
        $("#esku").hide();
        var sku = $("#sku").val();
        $.ajax({
            type: "POST",
            url: "/scripts/checkSku",
            data: {sku: sku},
            success: function (response) {
                if (response !== '') {
                    $("#esku").show();
                    $("#esku").html("The database is already have " + response);
                }
            }
        })
        return false;
    })
    $("#name").change(function () {
        var isNumName = !isNaN($("#name").val());
        if (isNumName) {
            $("#ename").show();
            $("#ename").html("Name should not be numeric!");
        } else {
            $("#ename").hide();
        }
    })
    $("#price").change(function () {
        var isNumPrice = isNaN($("#price").val());
        if (isNumPrice) {
            $("#eprice").show();
            $("#eprice").html("Price should be numeric!");
        } else {
            $("#eprice").hide();
        }
    })

    $("#productType").change(function () {
        var name = $('#productType').val();
        $.ajax({
            type: 'post',
            url: '/scripts/result',
            data: {id: name},
            success: function (response) {
                $('#dynamic').html(response);
            }
        })

    })

})