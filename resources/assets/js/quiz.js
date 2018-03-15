$('a.box-botao-sombra').click(function (e) {
  e.preventDefault();
  var params = "";
  var url = "";
  var selector = $(this);
  selector.find(".fa").removeClass('hidden');

  setTimeout( function(){

    if( selector.prop("id") == 'pergunta_1' ){
      url = "pergunta_2.php";
      params += '<input type="hidden" value="'+selector.data("pergunta")+'" name="pergunta_1">';
      $('#form_pergunta_1').append(params).submit();
    }
    else if( selector.prop("id") == 'pergunta_2' ){
      url = "pergunta_3.php";
      params += '<input type="hidden" value="'+selector.data("pergunta")+'" name="pergunta_2">';
      $('#form_pergunta_2').append(params).submit();
    }
    else if( selector.prop("id") == 'pergunta_3' ){
      url = "retorno.php";
      params += '<input type="hidden" value="'+selector.data("pergunta")+'" name="pergunta_3">';
      $('#form_pergunta_3').append(params).submit();
    }

  }, 100);

});
