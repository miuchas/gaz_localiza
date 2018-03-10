@extends('layouts.home')
@section('content')

%section#home
  .box-branco
  .box-perguntas-sombra.grande
    .box-perguntas.grande
      .texto-do-quadrado
        .frase-left
          %span.bem-vindo
            Bem-vindo ao nosso
          %span.bem-vindo.verde
            Quiz.
        .frase-right
          %span.alugue.verde
            ALUGUE
          %span.alugue
            ESSA IDEIA.
  .box-botao-sombra
    .box-botao
      COMEÇAR!
      %img{ :src => "/imgs/PlayIcon.png"}
  .box-branco.pequeno
  .box-perguntas-sombra.pequeno
    .box-perguntas.pequeno


  .box-perguntas-sombra.medio
    .box-perguntas.medio
  .descricao
    %img{ :src => "/imgs/LocalizaHertzLogoBig.png" }
    .frase
      %span.verde
        A cada vídeo do
      %span.branco
        minuto alugue essa ideia
      %span.verde
        , você receberá
    .frase
      %span.verde
        informações para responder à essas perguntas.
    .frase
      %span.verde
        responda
      %span.branco
        corretamente
      %span.verde
        às
      %span.branco
        3 perguntas
      %span.verde
        e ganhe um
    .frase
      %span.verde
        presente da
      %span.branco
        Localiza
      %span.amarelo
        Hertz!

@endsection
