@extends('layouts.home')
@section('content')

%section#home
  .container
    .col-md-6
      .box-perguntas-sombra
        .box-perguntas
          .texto-do-quadrado
            %span.bem-vindo
              Bem-vindo ao nosso
            %span.bem-vindo.verde
              Quiz.
            %span.alugue.verde
              ALUGUE
            %span.alugue
              ESSA IDEIA.
    .col-md-6
      .box-perguntas-sombra.pequeno
        .box-perguntas.pequeno

@endsection
