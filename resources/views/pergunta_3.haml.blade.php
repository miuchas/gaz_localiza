@extends('layouts.home')
@section('content')
%form#form_pergunta_3{:action => "resultado.php", :method => "POST"}
  %input{:name => "pergunta_1", :type => "hidden"}
  %input{:name => "pergunta_2", :type => "hidden"}
%section#perguntas
  .box-branco
  .box-perguntas-sombra.grande
    .box-perguntas.grande
      .texto-do-quadrado
        .frase
          %span.questao
            Pergunta
          %span.questao.verde
            3
        .frase
          %span.verde.pergunta-1
            A tecnologia
          %span.pergunta-2
            a favor da gestão
        .frase
          %span.alugue
            Alugue essa ideia.

  .box-perguntas-sombra.grande.box2
    .box-perguntas.grande.box2
      .texto-do-quadrado
        .frase
          %span.questao.verde
            3)
          %span.questao
            Como a tecnologia pode deixar o seu cliente mais fidelizado?
        .frase
          %a#pergunta_3.box-botao-sombra.pergunta.first.alexandre{"data-pergunta" => "1", :href => "#"}
            .box-botao.pergunta.alexandre
              %span Agilizando e personalizando
              %span o atendimento.
            .check
              %i.fa.fa-check

          %a#pergunta_3.box-botao-sombra.pergunta{"data-pergunta" => "0", :href => "#"}
            .box-botao.pergunta.linha-unica
              %span Sorteando prêmios.
            .check
              %i.fa.fa-check

  .box-branco.pequeno
  .box-perguntas-sombra.pequeno
    .box-perguntas.pequeno

  .box-perguntas-sombra.medio
    .box-perguntas.medio

%section#rodape
  .foto.alexandre
    %img{ :src=>"/imgs/Alexandre.png"}
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
