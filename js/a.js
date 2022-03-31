$(function (){
    $('#checkbox').on('submit',function(e){
        if (document.querySelector('#dcheck') == null) {
            e.preventDefault();
        }
        var checked = document.querySelector('#dcheck').checked;
        if(!checked) {
            e.preventDefault();
        }
    })
})