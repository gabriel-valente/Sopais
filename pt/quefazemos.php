<!DOCTYPE html>
<html lang="pt">
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
                     <img class="img-icon" src="../img/icons/projectdev.png">
                     <h3>Apoio ao Desenvolvimento de Projetos:</h3>
                  </div>
                  <p>Dispomos de uma equipa de especialistas prontos para ajudar o seu negócio.</p>
               </div>
               <div class="div-box" id="div-11">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/metrolab.png">
                     <h3>Laboratório Metrológico:</h3>
                  </div>
                  <p>Laboratório interno equipado para realizar diferentes testes dimensionais e funcionais.</p>
               </div>
               <div class="div-box" id="div-2">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/metalwork.png">
                     <h3>Metalomecânica de precisão:</h3>
                  </div>
                  <p>Ao serviço da empresa temos máquinas BIHLER e técnicos com know-how especializado na afinação das mesmas.</p>
               </div>
               <div class="div-box" id="div-22">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/stamp.png">
                     <h3>Estampagem:</h3>
                  </div>
                  <p>Parque diversificado de prensas, mecânicas e hidráulicas, com forças compreendidas entre as 45 e as 315 toneladas.</p>
               </div>
               <div class="div-box" id="div-3">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/bending.png">
                     <h3>Conformação de tubo:</h3>
                  </div>
                  <p>Redução, alargamento, corte e conformação de tubo são capacidades que a SOPAIS põe à disposição dos seus clientes.</p>
               </div>
               <div class="div-box" id="div-33">
                  <div class="box-heading">
                     <img class="img-icon" src="../img/icons/welding.png">
                     <h3>Soldadura:</h3>
                  </div>
                  <p>Dispomos de uma ótima qualidade de soldadura com tecnologias MIG/MAG e soldadura por resistência.</p>
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
