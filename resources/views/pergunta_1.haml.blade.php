@extends('layouts.home')
@section('content')
%form#form_pergunta_1{:action => "pergunta_2.php", :method => "POST"}
%section#perguntas
  .box-branco
  .box-perguntas-sombra.grande
    .box-perguntas.grande
      .texto-do-quadrado
        .frase
          %span.questao
            Pergunta
          %span.questao.verde
            1
        .frase
          %span.verde.pergunta-1
            Personalização
          %span.pergunta-2
            no atendimento
        .frase
          %span.alugue
            Alugue essa ideia.

  .box-perguntas-sombra.grande.box2
    .box-perguntas.grande.box2
      .texto-do-quadrado
        .frase
          %span.questao.verde
            1)
          %span.questao
            Entendendo as necessidades do viajante, a sua agência:
        .frase
          %a#pergunta_1.box-botao-sombra.pergunta.first{ :href=>"#", "data-pergunta"=>"1"}
            .box-botao.pergunta
              %span Aumenta a rentabilidade
              %span e fideliza o cliente.
            .check
              %i.fa.fa-check

          %a#pergunta_1.box-botao-sombra.pergunta{ :href=>"#", "data-pergunta"=>"0"}
            .box-botao.pergunta
              %span Deixa de aproveitar uma
              %span grande oportunidade.
            .check
              %i.fa.fa-check

  .box-branco.pequeno
  .box-perguntas-sombra.pequeno
    .box-perguntas.pequeno

  .box-perguntas-sombra.medio
    .box-perguntas.medio

%section#rodape
  .foto.tamiris
    %img{ :src=>"/imgs/Tamiris.png"}
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
