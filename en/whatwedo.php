<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/quefazemos.css">
   </head>
   <body onresize="UpdateWidth();">
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <img class="img-heading" src="https://i.imgur.com/ic9nTKH.jpg">
         <div class="div-wrapper">
            <div class="div-container">
               <div class="div-box" id="div-1">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/light-bulb.png">
                     <h3>Support for new projects development:</h3>
                  </div>
                  <p>Our team of specialist is at your disposal to help you develop your new projects.</p>
               </div>
               <div class="div-box" id="div-11">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/light-bulb.png">
                     <h3>Metrological Lab:</h3>
                  </div>
                  <p>Internal laboratory equipped to perform different functional and dimensional tests.</p>
               </div>
               <div class="div-box" id="div-2">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/light-bulb.png">
                     <h3>Precision Metal Working:</h3>
                  </div>
                  <p>We have BIHLER machines working for the company with specialized technicians dedicated to them.</p>
               </div>
               <div class="div-box" id="div-22">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/light-bulb.png">
                     <h3>Stamping:</h3>
                  </div>
                  <p>We have a diversified range of hydraulic and mechanic stamping machines with pressures between 45 and 315 tons of force.</p>
               </div>
               <div class="div-box" id="div-3">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/light-bulb.png">
                     <h3>Tube forming:</h3>
                  </div>
                  <p>Decreasing, widening, cutting and tube forming are some of the capabilities that SOPAIS has to offer to its clients.</p>
               </div>
               <div class="div-box" id="div-33">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/light-bulb.png">
                     <h3>Welding:</h3>
                  </div>
                  <p>Robotic MIG/MAG welding processed by Yaskawa robots and resistance welding used to fix nuts.</p>
               </div>
            </div>
         </div>
      </main>

      <script>
         var altura;
         var largura;

         function UpdateWidth() {
            largura = window.innerWidth;

            if (largura > 950) {
               $("#div-1").css("opacity", "0");
               $("#div-11").css("opacity", "0");
               $("#div-2").css("opacity", "0");
               $("#div-22").css("opacity", "0");
               $("#div-3").css("opacity", "0");
               $("#div-33").css("opacity", "0");
            } else {
               $("#div-1").css("opacity", "1");
               $("#div-11").css("opacity", "1");
               $("#div-2").css("opacity", "1");
               $("#div-22").css("opacity", "1");
               $("#div-3").css("opacity", "1");
               $("#div-33").css("opacity", "1");
            }
         }

         $(document).ready(function() {
            altura = window.innerHeight / 3;
            largura = window.innerWidth;

            if (largura > 950) {
               $("#div-1").css("opacity", "0");
               $("#div-11").css("opacity", "0");
               $("#div-2").css("opacity", "0");
               $("#div-22").css("opacity", "0");
               $("#div-3").css("opacity", "0");
               $("#div-33").css("opacity", "0");
            } else {
               $("#div-1").css("opacity", "1");
               $("#div-11").css("opacity", "1");
               $("#div-2").css("opacity", "1");
               $("#div-22").css("opacity", "1");
               $("#div-3").css("opacity", "1");
               $("#div-33").css("opacity", "1");
            }

            $(document).scroll(function() {
               var scroll = $(this).scrollTop();

               if (largura > 950) {
                  if (scroll >= altura / 4) {
                     $("#div-1").css({"opacity" : "1", "display" : "block", "transition" : "opacity 0.75s ease"});
                     $("#div-11").css({"opacity" : "1", "display" : "block", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#div-1").css({"opacity" : "0", "display" : "block", "transition" : "opacity 0.75s ease"});
                     $("#div-11").css({"opacity" : "0", "display" : "block", "transition" : "opacity 0.75s ease"});
                  }

                  if (scroll >= altura / 3) {
                     $("#div-2").css({"opacity" : "1", "display" : "block", "transition" : "opacity 0.75s ease"});
                     $("#div-22").css({"opacity" : "1", "display" : "block", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#div-2").css({"opacity" : "0", "display" : "block", "transition" : "opacity 0.75s ease"});
                     $("#div-22").css({"opacity" : "0", "display" : "block", "transition" : "opacity 0.75s ease"});
                  }

                  if (scroll >= altura / 2) {
                     $("#div-3").css({"opacity" : "1", "display" : "block", "transition" : "opacity 0.75s ease"});
                     $("#div-33").css({"opacity" : "1", "display" : "block", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#div-3").css({"opacity" : "0", "display" : "block", "transition" : "opacity 0.75s ease"});
                     $("#div-33").css({"opacity" : "0", "display" : "block", "transition" : "opacity 0.75s ease"});
                  }
               }
            });
         });

      </script>
      <?php
         include_once "includes/footer.php";
      ?>
   </body>
</html>
