<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/qualidade.css">
   </head>
   <body onresize="UpdateWidth();">
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <img class="img-heading" src="https://i.imgur.com/ic9nTKH.jpg">
         <div class="div-wrapper">
            <div class="div-container" id="div-texto">
               <p>The biggest challenge on <i>Sopais – Componentes Metálicos, Lda. </i> entrepreneurial orientation is to serve clients with excellence. Due to that our production quality is certified to ISO 9001 & IATF 16949 for the automotive industry.<br>
                  Now-a-days companies are key part of the community where it is established. Issues like the ecological footprint caused by its production must be solved by the company itself as well as taking care of its employees health and safety must be one of the company’s first concerns – like a family take care of their child –, that is why we managed to be certified to ISO 14001 & ISO 18001.</p>
            </div>

            <div class="div-container" id="div-certs">
               <div class="div-box" id="color1">
                  <img class="img-certif" src="../img/certs/IATF16949-E.png">
                  <h4>IATF 16949</h4>
                  <div class="button">
                     <a href="en/home.php">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color1">
                  <img class="img-certif" src="../img/certs/ISO9001Qu-E.png">
                  <h4>ISO 9001</h4>
                  <div class="button">
                     <a href="en/home.php">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color2">
                  <img class="img-certif" src="../img/certs/ISO14001.png">
                  <h4>ISO 14001</h4>
                  <div class="button">
                     <a href="en/home.php">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color3">
                  <img class="img-certif" src="../img/certs/NP4397_OHSAS18001.png">
                  <h4>ISO 18001</h4>
                  <div class="button">
                     <a href="en/home.php">Download</a>
                  </div>
               </div>
            </div>
            <div class="div-container" id="div-meaning">
               <p><b>IATF 16949:</b> Automotive Quality Management Systems<br>
                  <b>ISO 9001:</b> Quality Management Systems<br>
                  <b>ISO 14001:</b> Environmental Management Systems<br>
                  <b>ISO 18001:</b> Health & Safety Management Systems</p>
               </div>
         </div>
      </main>

      <script>
         var altura;
         var largura;

         function UpdateWidth() {
            largura = window.innerWidth;

            if (largura > 888) {
               $("#div-texto").css("opacity", "0");
               $("#div-certs").css("opacity", "0");
               $("#div-meaning").css("opacity", "0");
            } else {
               $("#div-texto").css("opacity", "1");
               $("#div-certs").css("opacity", "1");
               $("#div-meaning").css("opacity", "1");
            }
         }

         $(document).ready(function() {
            altura = window.innerHeight / 3;
            largura = window.innerWidth;

            if (largura > 888) {
               $("#div-texto").css("opacity", "0");
               $("#div-certs").css("opacity", "0");
               $("#div-meaning").css("opacity", "0");
            } else {
               $("#div-texto").css("opacity", "1");
               $("#div-certs").css("opacity", "1");
               $("#div-meaning").css("opacity", "1");
            }

            $(document).scroll(function() {
               var scroll = $(this).scrollTop();

               if (largura > 888) {
                  if (scroll >= altura / 4) {
                     $("#div-texto").css({"opacity" : "1", "display" : "flex", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#div-texto").css({"opacity" : "0", "display" : "flex", "transition" : "opacity 0.75s ease"});
                  }

                  if (scroll >= altura / 3) {
                     $("#div-certs").css({"opacity" : "1", "display" : "flex", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#div-certs").css({"opacity" : "0", "display" : "flex", "transition" : "opacity 0.75s ease"});
                  }

                  if (scroll >= altura / 2) {
                     $("#div-meaning").css({"opacity" : "1", "display" : "flex", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#div-meaning").css({"opacity" : "0", "display" : "flex", "transition" : "opacity 0.75s ease"});
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