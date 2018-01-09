$('.view-artigo').on('click',function(){
    var url = $(this).data('link');
    var id = $(this).data('id');

    $.ajax(url,
        {
            type: "get",
            data:  {"id":id},
            dataType: "json"

        }).then(function(dados) {
            $('#nome').text(dados.nome);
            $('#imagem').attr('src', '/Projeto_Plataformas/images/artigos/'+dados.imagem_artigo);
            $('#detalhes').text("Detalhes: " + dados.detalhes);
            $('#preco').text("Preço: " + dados.preco + "€");

    });
    $('#modal').modal('toggle');
});






