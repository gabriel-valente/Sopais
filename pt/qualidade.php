<!DOCTYPE html>
<html lang="pt">
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
               <p>O maior desafio da mentalidade empresarial da <i>Sopais – Componentes Metálicos, Lda. </i> é servir os clientes com o máximo de excelência, por isso, a qualidade da nossa produção é certificada para o ISO 9001 e IATF 16949 na indústria automóvel.<br>
                  Nos dias de hoje as empresas são parte integrante das comunidades onde se inserem. Problemas como a pegada ecológica resultante da produção têm que ser resolvidos pelas próprias empresas, ou, ainda, a saúde e segurança dos colaboradores, que deve ser encarada como uma das principais preocupações da empresa, são geridos pela Sopais pelo cumprimento das normas ISO 14001 e ISO 18001.</p>
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
               <p><b>IATF 16949:</b> Sistemas de Gestão de Qualidade para a Indústria Automóvel<br>
                  <b>ISO 9001:</b> Sistemas de Gestão de Qualidade<br>
                  <b>ISO 14001:</b> Sistemas de Gestão Ambiental<br>
                  <b>ISO 18001:</b> Sistemas de Gestão de Saúde e Segurança no Trabalho</p>
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
