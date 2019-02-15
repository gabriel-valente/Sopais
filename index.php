<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Sopais</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/pageChange.js"></script>
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <div class="div-division">
            <article>
              <h1 class="heading">"Excellence tailored for your products by the precision of our technology"</h1>
            </article>
            <video autoplay muted loop>
               <source src="img/video.mp4" type="video/mp4">
            </video>
         </div>

         <div class="div-wrapper">
            <div class="div-division flow">
                  <img class="img-certlogo" src="img/certs/IATF16949-E.png">
                  <img class="img-certlogo" src="img/certs/ISO9001Qu-E.png">
                  <img class="img-certlogo" src="img/certs/ISO14001.png">
                  <img class="img-certlogo" src="img/certs/NP4397_OHSAS18001.png">
            </div>
            <div class="div-division">
               <div class="div-message">
                  <h5><i>A SOPAIS – Componentes Metálicos, Lda.</i> foi fundada em 1987 contando com<b> mais de 30 anos de experiência na industria metalomecânica.</b></h5>
               </div>

               <div class="button">
                  <a href="index.php">Saiba mais</a>
               </div>
            </div>
            <br>
            <div class="div-division">
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
                  <a href="index.php">Mais notícias</a>
               </div>
            </div>
            <br>

         </div>
      </main>
      <?php
         include_once "includes/aside.php";
         include_once "includes/footer.php";
      ?>
   </body>
</html>
