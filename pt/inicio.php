<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="../js/pageChange.js"></script>

      <link rel="stylesheet" type="text/css" href="../fullPage.js/dist/fullpage.css" />
      <script type="text/javascript" src="../fullPage.js/dist/fullpage.js"></script>

   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main id="fullpage">
         <div class="menu">

            <div class="section div-division">
               <video autoplay muted loop>
                  <source src="../img/video.mp4" type="video/mp4">
               </video>
               <article>
                  <h1 class="heading">"Excellence tailored for your products."</h1>
               </article>
            </div>

            <div class="div-wrapper">
               <div class="div-division flow division-top" id="img-certs">
                  <div class="div-cert">
                     <img class="img-certlogo" src="../img/certs/IATF16949-E.png">
                  </div>
                  <div class="div-cert">
                     <img class="img-certlogo" src="../img/certs/ISO9001Qu-E.png">
                  </div>
                  <div class="div-cert">
                     <img class="img-certlogo" src="../img/certs/ISO14001.png">
                  </div>
                  <div class="div-cert">
                     <img class="img-certlogo" src="../img/certs/NP4397_OHSAS18001.png">
                  </div>

                  <p><b></b></p>
               </div>
               <div class="div-division" id="div-mensagem">
                  <div class="div-message">
                     <h5>A <i> SOPAIS – Componentes Metálicos, Lda.</i> foi fundada em 1987 contando com <b> mais de 30 anos de experiência na indústria metalomecânica.</b></h5>
                  </div>

                  <div class="button">
                     <a href="empresa.php">Saiba mais</a>
                  </div>
               </div>
               <br>
               <div class="section div-division" id="div-noticias">
                  <h2>Notícias</h2>
                  <div class="div-container flow">
                     <div class="div-content post">
                        <div class="image-container">
                           <img src="http://images.unsplash.com/photo-1503249023995-51b0f3778ccf?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9">
                        </div>
                        <h3>Lorem ipsum dolor sit amet.</h3>
                     </div>

                     <div class="div-content post">
                        <div class="image-container">
                           <img src="https://i.pinimg.com/originals/e2/b8/2a/e2b82aded815e80351b929a77519adaa.jpg">
                        </div>
                        <h3>Lorem ipsum dolor sit amet.</h3>
                     </div>

                     <div class="div-content post">
                        <div class="image-container">
                           <img src="https://images.wallpaperscraft.com/image/city_vector_panorama_119914_3840x2160.jpg">
                        </div>
                        <h3>Lorem ipsum dolor sit amet.</h3>
                     </div>

                  <div class="button">
                     <a href="noticias.php">Mais notícias</a>
                  </div>
               </div>
               <br>
            </div>
         </div>
      </main>
      <script>
      $(document).ready(function(){
         $("#fullpage").fullpage();
      });
      </script>
      <?php
         include_once "includes/aside.php";
         include_once "includes/footer.php";
      ?>
   </body>
</html>
