<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/empresa.css">
   </head>
   <body onresize="UpdateWidth();">
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <img class="img-heading" src="https://i.imgur.com/ic9nTKH.jpg">
         <div class="div-wrapper">
            <p id="p-texto"><i>Sopais – Componentes Metálicos, Lda. <i> was founded in 1987. Today the company counts with more than 30 years of experience on the metalworking industry.<br><br>Based on the know-how achieved with the enterprise experience on the sector it finds differentiation on its facilities, technology and qualified, flexible and professional human resources. With a tailored offer Sopais wants to settle on the market as top-of-mind brand for the production of metallic parts.</p>
            <div class="div-container" id="div-azul">
               <div class="horizontal">
                  <div class="div-box">
                     <h3>Mission</h3>
                     <p>Develop, produce and commercialize metal parts for various industry sectors with excellence.<br><br>We strive to fit our clients needs with our products; quality, pricing, delivery deadlines and win-win partnerships are some of the factors that are relevant on our daily routine<br><br>We desire to be known as a cooperative and trustable organization among our suppliers as well as a company that’s concerned with a good labor environment for the employees.</p>
                  </div>
               </div>
               <div class="vertical">
                  <div class="div-box ignore">
                     <h3>Vision</h3>
                     <p>To be on the top tier metal working companies to be consulted by the major international groups that need metallic parts on their products.</p>
                  </div>
                  <div class="div-box ignore">
                     <h3>Values</h3>
                     <p>Client satisfaction;<br>Lean thinking;<br>Environmental care;<br>Health and safety first;<br>Meet the legal requirements applied on the industry;<br>Focus on results;<br>Trust;<br>Professional valorization and respect;<br>Innovation.</p>
                  </div>
               </div>
            </div>
         </div>
         <img class="img-footing" src="https://i.imgur.com/ic9nTKH.jpg">
      </main>

      <script>
         var altura;
         var largura;

         function UpdateWidth() {
            largura = window.innerWidth;

            if (largura > 888) {
               $("#p-texto").css("opacity", "0");
               $("#div-azul").css("opacity", "0");
            } else {
               $("#p-texto").css("opacity", "1");
               $("#div-azul").css("opacity", "1");
            }
         }

         $(document).ready(function() {
            altura = window.innerHeight / 3;
            largura = window.innerWidth;

            if (largura > 888) {
               $("#p-texto").css("opacity", "0");
               $("#div-azul").css("opacity", "0");
            } else {
               $("#p-textos").css("opacity", "1");
               $("#div-azul").css("opacity", "1");
            }

            $(document).scroll(function() {
               var scroll = $(this).scrollTop();

               if (largura > 888) {
                  if (scroll >= altura / 3) {
                     $("#p-texto").css({"opacity" : "1", "display" : "block", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#p-texto").css({"opacity" : "0", "display" : "block", "transition" : "opacity 0.75s ease"});
                  }

                  if (scroll >= altura) {
                     $("#div-azul").css({"opacity" : "1", "display" : "flex", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#div-azul").css({"opacity" : "0", "display" : "flex", "transition" : "opacity 0.75s ease"});
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
