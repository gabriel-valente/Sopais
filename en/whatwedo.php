<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <link rel="stylesheet" href="../materialize/css/materialize.css">
      <script src="../materialize/js/materialize.min.js"></script>

      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/quefazemos.css">
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <img class="img-heading" src="../img/welding.png">
         <div class="section div-division flow division-top">
            <div class="navigation" onclick="back();">
               <img src="../img/icons/arrow-bwd.png">
            </div>
            <div class="carousel carousel-slider center">
               <div class="carousel-item center">
                  <img src="../img/carousel/1.1.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/1.2.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/1.3.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/2.1.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/2.2.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/2.3.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/3.1.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/3.2.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/3.3.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/3.4.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/4.1.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/4.2.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/4.3.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/4.4.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/4.5.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/5.1.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/5.2.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/5.3.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/6.1.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/6.2.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/7.1.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/7.2.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/7.3.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/8.1.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/8.2.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/9.1.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/9.2.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/9.3.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/10.1.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/10.2.jpg">
               </div>
               <div class="carousel-item center">
                  <img src="../img/carousel/10.3.jpg">
               </div>
            </div>
            <div class="navigation" onclick="forward();">
               <img src="../img/icons/arrow-fwd.png">
            </div>
         </div>
         <div class="div-wrapper flow division-top temas">
            <p onclick="mudarCarousel(0, 1);">Stamping</p>
            <p onclick="mudarCarousel(3, 2);">Precision Metalworking</p>
            <p onclick="mudarCarousel(6, 3);">Tube Forming</p>
            <p onclick="mudarCarousel(10, 4);">Support for New Projects</p>
            <p onclick="mudarCarousel(15, 5);">Welding</p>
         </div>
         <div class="div-wrapper texto">
            <p></p>
         </div>
         <div class="div-wrapper">
            <video preload="metadata" autoplay muted loop id="video">
               <source src="" type="video/mp4">
            </video>
         </div>
         <img class="img-footing" src="../img/welding.png">
      </main>

      <script>
         $(document).ready(setTimeout(function() {
            window.location = "#intro";
         }, 25));

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

         function mudarCarousel(item, id) {
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            l.set(item);

            var $video = $('video');

            if (id == 1) {
               $(".texto p").html("We have a diversified range of hydraulic and mechanic stamping machines with pressures between 45 and 315 tons of force.");
               videoSrc = $('source', $video).attr('src', "../img/Stamping.mp4");
               $video[0].load();
               $video[0].play();
            } else if (id == 2) {
               $(".texto p").html("We have BIHLER machines working for the company with specialized technicians dedicated to them.");
               videoSrc = $('source', $video).attr('src', "../img/PrecisionMetalworking.mp4");
               $video[0].load();
               $video[0].play();
            } else if (id == 3) {
               $(".texto p").html("Decreasing, widening, cutting and tube forming are some of the capabilities that SOPAIS has to offer to its clients.");
               videoSrc = $('source', $video).attr('src', "../img/TubeForming.mp4");
               $video[0].load();
               $video[0].play();
            } else if (id == 4) {
               $(".texto p").html("Our team of specialist is at your disposal to help you develop your new projects.");
               videoSrc = $('source', $video).attr('src', "../img/SupportNewProjects.mp4");
               $video[0].load();
               $video[0].play();
            } else if (id == 5) {
               $(".texto p").html("Robotic MIG/MAG welding processed by Yaskawa robots and resistance welding used to fix nuts.");
               videoSrc = $('source', $video).attr('src', "../img/Welding.mp4");
               $video[0].load();
               $video[0].play();
            }
         }
      </script>
      <?php
         include_once "includes/footer.php";
      ?>
   </body>
</html>
