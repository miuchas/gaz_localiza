@extends('layouts.home')
@section('content')

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
          %a.box-botao-sombra.pergunta.first{ :href=>"#"}
            .box-botao.pergunta
              %span Aumenta a rentabilidade
              %span e fideliza o cliente.
            .check
              %i.fa.fa-check

          %a.box-botao-sombra.pergunta{ :href=>"#"}
            .box-botao.pergunta
              %span Deixa de aproveitar uma
              %span grande oportunidade.
            .check
              %i.fa.fa-check
  .foto
    %img{ :src=>"/imgs/Tamiris.png"}

  .box-branco.pequeno
  .box-perguntas-sombra.pequeno
    .box-perguntas.pequeno

  .box-perguntas-sombra.medio
    .box-perguntas.medio

@endsection
