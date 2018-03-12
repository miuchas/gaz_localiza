@extends('layouts.home')
@section('content')

%section#resultado
  .box-branco
  .box-perguntas-sombra.grande
    .box-perguntas.grande
      .texto-do-quadrado
        .frase-left
          %span.bem-vindo.verde
            Você finalizou o quiz!
          %span.bem-vindo.branco
            Sua pontuação foi:
        .frase-right
          %span.alugue.verde
            0/3
  %a.box-botao-sombra{ :href=>"#"}
    .box-botao
      %img{ :src => "/imgs/ReturnIcon.png"}
      %span.pequeno
        Voltar ao
      %span.grande
        INÍCIO!

  .box-perguntas-sombra.pequeno
    .box-perguntas.pequeno


  .box-perguntas-sombra.medio
    .box-perguntas.medio

  .descricao
    .frase
      %span.verde
        Basta apresentar
    .frase
      %span.branco
        esta tela de confirmação
    .frase
      %span.verde
        do resultado do quiz à nossa
    .frase
      %span.verde
        promotora para retirar
    .frase
      %span.verde
        o brinde!
    .frase
      %span.verde
        Boa sorte!


%section#rodape
  .foto.solange
    %img{ :src=>"/imgs/Solange.png"}
  .area-util
    .logo
      %img{ :src => "/imgs/logo-localiza-hertz.png"}
    .dados
      %span
        Informações ao consumidor: Localiza Rent a Car S/A - CNPJ nº 16.670.085/0001-55
      %span
        Sede: Avenida Bernardo Vasconcelos, n° 377 - Cachoeirinha – CEP: 31.150-000 - Belo Horizonte – MG
      %span
        Central de Reservas 24h: 0800 979 2000 | Assistência a Clientes 24h: 0800 979 2020
      %span
        E-mail: centraldereservas@localiza.com

@endsection
