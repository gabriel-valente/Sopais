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
         <div class="section" id="section0">
            <video preload="metadata" autoplay controls controlsList="nodownload">
               <source src="../img/SOPAIS.mp4" type="video/mp4">
               </video>
               <article>
                  <h1 class="heading">"Excellence tailored for your products."</h1>
               </article>
            </div>
         <div class="section" id="section1">
            <div class="div-message">
               <h5>A <i> SOPAIS – Componentes Metálicos, Lda.</i> foi fundada em 1987 contando com <b> mais de 30 anos de experiência na indústria metalomecânica.</b></h5>
            </div>
         </div>
      </main>

      <?php
      include_once "includes/aside.php";
      include_once "includes/footer.php";
      ?>
      
      <script>
         $(document).ready(setTimeout(function() {
            window.location = "inicio.php#firstPage";
            $("header").addClass("hide");
         }, 10));

         $(document).ready(function() {
            $(window).on("scroll", function () {
               if (window.location.hash.substr(1) == "firstPage") {
                  $("header").removeClass("show").addClass("hide");
               }
               else if (window.location.hash.substr(1) == "secondPage") {
                  $("header").removeClass("hide").addClass("show");
               }
            });
         });

         var myFullpage = new fullpage("#fullpage", {
            anchors: ["firstPage", "secondPage", "3rdPage"],
            scrollBar: true
         });
      </script>
   </body>
</html>
