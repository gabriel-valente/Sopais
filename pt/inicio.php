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
   </head>
   <body onresize="UpdateWidth();">
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <div class="div-division">
            <article>
              <h1 class="heading">"Excellence tailored for your products by the precision of our technology"</h1>
            </article>
            <video autoplay muted loop>
               <source src="../img/video.mp4" type="video/mp4">
            </video>
         </div>

         <div class="div-wrapper">
            <div class="div-division flow division-top" id="img-certs">
                  <img class="img-certlogo" src="../img/certs/IATF16949-E.png">
                  <img class="img-certlogo" src="../img/certs/ISO9001Qu-E.png">
                  <img class="img-certlogo" src="../img/certs/ISO14001.png">
                  <img class="img-certlogo" src="../img/certs/NP4397_OHSAS18001.png">
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
            <div class="div-division" id="div-noticias">
               <h2>Notícias</h2>
               <div class="div-container flow">
                  <div class="div-content post">
                     <div class="image-container">
                        <img src="https://cdn.pixabay.com/photo/2017/12/29/18/47/nature-3048299__340.jpg">
                     </div>
                     <h3>Lorem ipsum dolor sit amet.</h3>
                  </div>

                  <div class="div-content post">
                     <div class="image-container">
                        <img src="https://cdn.pixabay.com/photo/2017/12/29/18/47/nature-3048299__340.jpg">
                     </div>
                     <h3>Lorem ipsum dolor sit amet.</h3>
                  </div>

                  <div class="div-content post">
                     <div class="image-container">
                        <img src="https://cdn.pixabay.com/photo/2017/12/29/18/47/nature-3048299__340.jpg">
                     </div>
                     <h3>Lorem ipsum dolor sit amet.</h3>
                  </div>

               <div class="button">
                  <a href="inicio.php">Mais notícias</a>
               </div>
            </div>
            <br>

         </div>
      </main>

      <script>
         var altura;
         var largura;

         function UpdateWidth() {
            largura = window.innerWidth;

            if (largura > 888) {
               $("#img-certs").css("opacity", "0");
               $("#div-mensagem").css("opacity", "0");
               $("#div-noticias").css("opacity", "0");
            } else {
               $("#img-certs").css("opacity", "1");
               $("#div-mensagem").css("opacity", "1");
               $("#div-noticias").css("opacity", "1");
            }
         }

         $(document).ready(function() {
            altura = window.innerHeight / 3;
            largura = window.innerWidth;

            if (largura > 888) {
               $("#img-certs").css("opacity", "0");
               $("#div-mensagem").css("opacity", "0");
               $("#div-noticias").css("opacity", "0");
            } else {
               $("#img-certs").css("opacity", "1");
               $("#div-mensagem").css("opacity", "1");
               $("#div-noticias").css("opacity", "1");
            }

            $(document).scroll(function() {
               var scroll = $(this).scrollTop();

               if (largura > 888) {
                  if (scroll >= altura / 3) {
                     $("#img-certs").css({"opacity" : "1", "display" : "flex", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#img-certs").css({"opacity" : "0", "display" : "flex", "transition" : "opacity 0.75s ease"});
                  }

                  if (scroll >= altura / 2) {
                     $("#div-mensagem").css({"opacity" : "1", "display" : "block", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#div-mensagem").css({"opacity" : "0", "display" : "block", "transition" : "opacity 0.75s ease"});
                  }

                  if (scroll >= altura) {
                     $("#div-noticias").css({"opacity" : "1", "display" : "block", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#div-noticias").css({"opacity" : "0", "display" : "block", "transition" : "opacity 0.75s ease"});
                  }
               }
            });
         });

      </script>
      <?php
         include_once "includes/aside.php";
         include_once "includes/footer.php";
      ?>
   </body>
</html>
