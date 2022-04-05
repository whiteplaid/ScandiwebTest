$(function () {
    $('#add-product').on('click', function(e){
        window.location.href='/add-product';
    })
    $('#checkbox').on('submit', function (e) {     
        if (document.querySelector('.delete-checkbox') == null) {
            e.preventDefault();
        }
        var checked = document.querySelector('.delete-checkbox').checked;
        if (!checked) {
            e.preventDefault();
        }
    })
})