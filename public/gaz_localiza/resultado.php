
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
    <input type="hidden" name="pergunta_1" value=<?php echo $_POST['pergunta_1']; ?>>
    <input type="hidden" name="pergunta_2" value=<?php echo $_POST['pergunta_2']; ?>>
    <input type="hidden" name="pergunta_3" value=<?php echo $_POST['pergunta_3']; ?>>
    <section id="menu">
      <a href="index.php">
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
    <section id="resultado">
      <div class="box-branco"></div>
      <div class="box-perguntas-sombra grande">
        <div class="box-perguntas grande">
          <div class="texto-do-quadrado" >
            <div class="frase-left">
              <span class='bem-vindo verde'>
                Você finalizou o quiz!
              </span>
              <span class="bem-vindo branco">
                Sua pontuação foi:
              </span>
            </div>
            <div class="frase-right">
              <span class="alugue verde">
                <?php
                  echo $_POST['pergunta_1'] + $_POST['pergunta_2'] + $_POST['pergunta_3'];
                ?>/3
              </span>
            </div>
          </div>
        </div>
      </div>
      <a class="box-botao-sombra" href="index.php">
        <div class="box-botao">
          <img src="imgs/ReturnIcon.png">
          <span class="pequeno">
            Voltar ao
          </span>
          <span class="grande">
            INÍCIO!
          </span>
        </div>
      </a>
      <div class="box-perguntas-sombra pequeno">
        <div class="box-perguntas pequeno"></div>
      </div>
      <div class="box-perguntas-sombra medio">
        <div class="box-perguntas medio"></div>
      </div>
      <div class="descricao">
        <?php
          if( ($_POST['pergunta_1'] + $_POST['pergunta_2'] + $_POST['pergunta_3']) == 3){
            echo '<div class="frase"><span class="verde"> Basta apresentar </span></div>
            <div class="frase"><span class="branco"> esta tela de confirmação </span></div>
            <div class="frase"><span class="verde"> do resultado do quiz à nossa </span></div>
            <div class="frase"><span class="verde"> promotora para retirar </span></div>
            <div class="frase"><span class="verde"> o brinde! </span></div>';
          }
          else{
            echo '<div class="frase"><span class="verde"> Infelizmente você </span></div>
            <div class="frase"><span class="verde"> não conseguiu responder </span></div>
            <div class="frase"><span class="verde"> a todas as perguntas corretamente. </span></div>
            <div class="frase"><span class="verde"> Obrigado pela participação </span></div>
            <div class="frase"><span class="verde"> e sinta-se livre para </span></div>
            <div class="frase"><span class="verde"> reiniciar o quiz! </span></div>';
          }
        ?>
      </div>
    </section>
    <section id="rodape">
      <div class="foto solange">
        <img src="imgs/Solange.png">
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
  </body>
</html>
