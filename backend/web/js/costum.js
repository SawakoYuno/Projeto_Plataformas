
$('.bloquear-cliente').on('click',function(){
    var url = $(this).data('link');
    var id = $(this).data('id');

    $.ajax(url,
        {
            type: "get",
            data:  {"id_user":id},
            dataType: "json"
        }).then(function(status){
            $('#estado_'+id).text(status);
    });
});






