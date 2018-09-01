$('.painel button').click(function(){
    $(this).parent().toggleClass('painel-aberto')

    if ($(this).parent().hasClass('painel-aberto')){
        $(this).html('Mostrar Menos');

    }else{
        $(this).html('Mostrar Mais');
    }

})