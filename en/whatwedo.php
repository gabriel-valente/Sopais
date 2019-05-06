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
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-heading" src="../img/welding.png">
            </div>
         </div>
         <div class="section div-division flow division-top" id="carousel">
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
         <div id="anchor">
            <div class="div-wrapper flow" id="info">
               <div class="flow division-top temas">
                  <ul>
                     <li><p class="temaSelected" id="1" onclick="mudarCarousel(18, 1);"><a href="#anchor">Stamping</a></p></li>
                     <li><p id="2" onclick="mudarCarousel(0, 2);"><a href="#anchor">Precision Metalworking</a></p></li>
                     <li><p id="3" onclick="mudarCarousel(28, 3);"><a href="#anchor">Tube Forming</a></p></li>
                     <li><p id="4" onclick="mudarCarousel(null, 4);"><a href="#anchor">Support for New Projects</a></p></li>
                     <li><p id="5" onclick="mudarCarousel(null, 5);"><a href="#anchor">Welding</a></p></li>
                  </ul>
               </div>
               <div class="content">
                  <video preload="metadata" autoplay muted loop id="video">
                     <source src="../img/Stamping.mp4" type="video/mp4">
                     </video>
                     <div class="texto">
                        <p>We have a diversified range of hydraulic and mechanic stamping machines with pressures between 45 and 315 tons of force.</p>
                     </div>
               </div>
            </div>
         </div>
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-footing" src="../img/welding.png">
            </div>
         </div>
      </main>

      <script>
         $("nav a[href$='whatwedo.php']").addClass("paginaatual");

         $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
               scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
         });

         $(document).ready(function() {
            var elems2 = document.querySelectorAll('.parallax');
            var instances2 = M.Parallax.init(elems2);

            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, {
               fullWidth: true
            });

            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);

            var largura = $('video').width();
            $("video").height(largura * 0.4285714286);

            setTimeout(function() {
               $('html, body').animate({ scrollTop: $('#carousel').offset().top}, 500);
            }, 200);
         });

         timer = setInterval(function() {
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            l.next();
         }, 3000);

         function back() {
            clearTimeout(timer);
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            l.prev();
            setTimeout(timer);
         }

         function forward() {
            clearTimeout(timer);
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            l.next();
            setTimeout(timer);
         }

         $(window).resize(function() {
            var largura = $('video').width();
            $("video").height(largura * 0.4285714286);
         });

         function mudarCarousel(item, id) {
            clearTimeout(timer);
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            if (item != null) {
               l.set(item);
            }
            setTimeout(timer);

            var $video = $('video');

            $(".temaSelected").removeClass("temaSelected");
            $("#" + id).addClass("temaSelected");

            if (id == 1) {
               $(".texto p").html("We have a diversified range of hydraulic and mechanic stamping machines with pressures between 45 and 315 tons of force.");
               $($video).fadeOut(500, function() {
                  videoSrc = $('source', $video).attr('src', "../img/Stamping.mp4");
                  $video[0].load();
                  $video[0].play();
                  $($video).fadeIn(500);
               });
            } else if (id == 2) {
               $(".texto p").html("We have BIHLER machines working for the company with specialized technicians dedicated to them.");
               $($video).fadeOut(500, function() {
                  videoSrc = $('source', $video).attr('src', "../img/PrecisionMetalworking.mp4");
                  $video[0].load();
                  $video[0].play();
                  $($video).fadeIn(500);
               });
            } else if (id == 3) {
               $(".texto p").html("Decreasing, widening, cutting and tube forming are some of the capabilities that SOPAIS has to offer to its clients.");
               $($video).fadeOut(500, function() {
                  videoSrc = $('source', $video).attr('src', "../img/TubeForming.mp4");
                  $video[0].load();
                  $video[0].play();
                  $($video).fadeIn(500);
               });
            } else if (id == 4) {
               $(".texto p").html("Our team of specialist is at your disposal to help you develop your new projects.");
               $($video).fadeOut(500, function() {
                  videoSrc = $('source', $video).attr('src', "../img/SupportNewProjects.mp4");
                  $video[0].load();
                  $video[0].play();
                  $($video).fadeIn(500);
               });
            } else if (id == 5) {
               $(".texto p").html("Robotic MIG/MAG welding processed by Yaskawa robots and resistance welding used to fix nuts.");
               $($video).fadeOut(500, function() {
                  videoSrc = $('source', $video).attr('src', "../img/Welding.mp4");
                  $video[0].load();
                  $video[0].play();
                  $($video).fadeIn(500);
               });
            }
         }
      </script>
      <?php
         include_once "includes/aside.php";
         include_once "includes/footer.php";
      ?>
   </body>
</html>
