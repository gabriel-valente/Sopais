<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <link rel="stylesheet" type="text/css" href="../fullPage.js/dist/fullpage.css" />
      <script type="text/javascript" src="../fullPage.js/dist/fullpage.js"></script>

      <link rel="stylesheet" href="../materialize/css/materialize.css">
      <script src="../materialize/js/materialize.min.js"></script>

      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="../js/pageChange.js"></script>
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main id="fullpage">
         <div class="section" id="section0" style="padding-top: 0px;">
            <video preload="metadata" data-autoplay autoplay controls muted controlsList="nodownload">
               <source src="../img/SOPAIS.mp4" type="video/mp4">
               </video>
               <article>
                  <h1 class="heading">"Excellence tailored for your products."</h1>
               </article>
            </div>
         <div class="section" id="section1">
            <div class="div-wrapper">
               <div class="div-division flow division-top" id="img-certs">
                  <div class="div-cert" id="1" onclick="changeText($(this).attr('id'))">
                     <img class="img-certlogo" src="../img/certs/IATF16949-E.png">
                  </div>
                  <div class="div-cert" id="2" onclick="changeText($(this).attr('id'))">
                     <img class="img-certlogo" src="../img/certs/ISO9001Qu-E.png">
                  </div>
                  <div class="div-cert" id="3" onclick="changeText($(this).attr('id'))">
                     <img class="img-certlogo" src="../img/certs/ISO14001.png">
                  </div>
                  <div class="div-cert" id="4" onclick="changeText($(this).attr('id'))">
                     <img class="img-certlogo" src="../img/certs/NP4397_OHSAS18001.png">
                  </div>

                  <b class="cert-desc"></b>
                  <div class="button">
                     <a href="empresa.php">Saiba mais</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="section" id="section2">
            <div class="navigation" id="back" onclick="back();">
               <img src="../img/icons/arrow.png">
            </div>
            <div class="div-wrapper">
               <div class="carousel carousel-slider center">
                  <div class="carousel-item center" href="#one!">
                     <img src="../img/carousel/1.1.jpg">
                  </div>
                  <div class="carousel-item center" href="#two!">
                     <img src="../img/carousel/1.2.jpg">
                  </div>
                  <div class="carousel-item center" href="#three!">
                     <img src="../img/carousel/1.3.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/2.1.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/2.2.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/2.3.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/3.1.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/3.2.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/3.3.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/3.4.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/4.1.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/4.2.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/4.3.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/4.4.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/4.5.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/5.1.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/5.2.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/5.3.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/6.1.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/6.2.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/7.1.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/7.2.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/7.3.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/8.1.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/8.2.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/9.1.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/9.2.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/9.3.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/10.1.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/10.2.jpg">
                  </div>
                  <div class="carousel-item center" href="#four!">
                     <img src="../img/carousel/10.3.jpg">
                  </div>
               </div>
            </div>
            <div class="navigation" onclick="forward();">
               <img src="../img/icons/arrow.png">
            </div>
         </div>
         <div class="section" id="section3">
            <div class="div-division" id="fundo">
               <p>sdgfhm,hgfdhjkmgfd</p>
            </div>
         </div>
      </main>

      <?php
      include_once "includes/aside.php";
      include_once "includes/footer.php";
      ?>

      <script>
         $(document).ready(setTimeout(function() {
            window.location = "inicio.php#video";
         }, 25));

         function changeText(id) {
            $("#img-certs").find("*").removeClass("selected");
            $("#" + id).addClass("selected");

            if (id == 1) {
               $(".cert-desc").html("Sistemas de Gestão de Qualidade para a Indústria Automóvel");
            }
            else if (id == 2) {
               $(".cert-desc").html("Sistemas de Gestão de Qualidade");
            }
            else if (id == 3) {
               $(".cert-desc").html("Sistemas de Gestão Ambiental");
            }
            else if (id == 4) {
               $(".cert-desc").html("Sistemas de Gestão de Saúde e Segurança no Trabalho");
            }
            else {
               $(".cert-desc").html();
            }
         }


         var myFullpage = new fullpage("#fullpage", {
            anchors: ["video", "certificados", "produtos", "informacoes", "noticias"],
            scrollBar: true
         });

         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, {
               fullWidth: true
            });
         });

         function back() {
            var el = document.querySelector(".carousel");
             var l = M.Carousel.getInstance(el);
             l.prev();
         }

         function forward() {
            var el = document.querySelector(".carousel");
             var l = M.Carousel.getInstance(el);
             l.next();
         }
      </script>
   </body>
</html>
