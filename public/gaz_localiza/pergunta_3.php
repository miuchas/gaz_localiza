
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Localiza Quiz</title>
    <!-- /Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/918787cd13.js"></script>
    <!-- /CSS -->
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <form id="form_pergunta_3" action="resultado.php" method="POST">
      <input type="hidden" name="pergunta_1" value=<?php echo $_POST['pergunta_1']; ?>>
      <input type="hidden" name="pergunta_2" value=<?php echo $_POST['pergunta_2']; ?>>
    </form>
    <section id="menu">
      <a href="">
        <img src="imgs/logo-localiza-hertz.png">
      </a>
      <div class="texto-menu">
        <span class="verde-claro">
          QUIZ
        </span>
        <span>
          ALUGUE ESSA IDEIA!
        </span>
      </div>
      <a class="texto-menu-inicio" href="index.php">
        INÍCIO
      </a>
    </section>
        <section id="perguntas">
      <div class="box-branco"></div>
      <div class="box-perguntas-sombra grande">
        <div class="box-perguntas grande">
          <div class="texto-do-quadrado">
            <div class="frase">
              <span class="questao">
                Pergunta
              </span>
              <span class="questao verde">
                3
              </span>
            </div>
            <div class="frase">
              <span class="verde pergunta-1">
                A tecnologia
              </span>
              <span class="pergunta-2">
                a favor da gestão
              </span>
            </div>
            <div class="frase">
              <span class="alugue">
                Alugue essa ideia.
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="box-perguntas-sombra grande box2">
        <div class="box-perguntas grande box2">
          <div class="texto-do-quadrado">
            <div class="frase">
              <span class="questao verde">
                3)
              </span>
              <span class="questao">
                Como a tecnologia pode deixar o seu cliente mais fidelizado?
              </span>
            </div>
            <div class="frase">
              <a id="pergunta_3" data-pergunta="1" class="box-botao-sombra pergunta first alexandre" href="#">
                <div class="box-botao pergunta alexandre">
                  <span>Agilizando e personalizando</span>
                  <span>o atendimento.</span>
                </div>
                <div class="check">
                  <i class="fa fa-check hidden"></i>
                </div>
              </a>
              <a id="pergunta_3" data-pergunta="0" class="box-botao-sombra pergunta" href="#">
                <div class="box-botao pergunta linha-unica">
                  <span>Sorteando prêmios.</span>
                </div>
                <div class="check">
                  <i class="fa fa-check hidden"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-branco pequeno"></div>
      <div class="box-perguntas-sombra pequeno">
        <div class="box-perguntas pequeno"></div>
      </div>
      <div class="box-perguntas-sombra medio">
        <div class="box-perguntas medio"></div>
      </div>
    </section>
    <section id="rodape">
      <div class="foto alexandre">
        <img src="imgs/Alexandre.png">
      </div>
      <div class="area-util">
        <div class="logo">
          <img src="imgs/logo-localiza-hertz.png">
        </div>
        <div class="dados">
          <span>
            Informações ao consumidor: Localiza Rent a Car S/A - CNPJ nº 16.670.085/0001-55
          </span>
          <span>
            Sede: Avenida Bernardo Vasconcelos, n° 377 - Cachoeirinha – CEP: 31.150-000 - Belo Horizonte – MG
          </span>
          <span>
            Central de Reservas 24h: 0800 979 2000 | Assistência a Clientes 24h: 0800 979 2020
          </span>
          <span>
            E-mail: centraldereservas@localiza.com
          </span>
        </div>
      </div>
    </section>
    <!-- /javascripts -->
    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/popper.js" type="text/javascript"></script>
    <script src="js/quiz.js" type="text/javascript"></script>
  </body>
</html>
