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
      <link rel="stylesheet" href="../css/qualidade.css">
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <img class="img-heading" src="../img/medicoescota.png">
         <div class="div-wrapper">
            <div class="div-container" id="div-texto">
               <div class="div-imagetext">
                  <img src="../img/medicao.png">
                  <h1>METROLOGY</h1>
               </div>
               <p><b>The biggest challenge on</b> SOPAIS – COMPONENTES METÁLICOS, LDA. entrepreneurial orientation <b> is to serve clients with excellence. </b> Due to that our production quality is certified to ISO 9001 & IATF 16949 for the automotive industry.<br>
                  Now-a-days <b> companies are key part of the community where it is established. </b> Issues like the ecological footprint caused by its production must be solved by the company itself as well as taking care of its employees health and safety must be one of the company’s first concerns – like a family take care of their child –, that is why we managed to be certified to ISO 14001 & OHSAS 18001.</p>
            </div>
         </div>

         <div class="div-wrapper">
            <div class="div-container" id="div-certs">
               <div class="div-box" id="color1">
                  <img class="img-certif" src="../img/certs/IATF16949-E.png">
                  <h4>IATF 16949</h4>
                  <p>Provides credibility to produce metal parts for the automotive industry</p>
                  <div class="button">
                     <a href="" download="../img/.png">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color1">
                  <img class="img-certif" src="../img/certs/ISO9001Qu-E.png">
                  <h4>ISO 9001</h4>
                  <p>Enables more efficiency leveraging at the same time the quality standards</p>
                  <div class="button">
                     <a href="" download="../img/.png">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color2">
                  <img class="img-certif" src="../img/certs/ISO14001.png">
                  <h4>ISO 14001</h4>
                  <p>Minimizes the environmental impact as well as it enhances the commitment with environmental protection</p>
                  <div class="button">
                     <a href="" download="../img/.png">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color3">
                  <img class="img-certif" src="../img/certs/NP4397_OHSAS18001.png">
                  <h4>OHSAS 18001</h4>
                  <p>Certifies the commitment of the company with its collaborator’s health and security</p>
                  <div class="button">
                     <a href="" download="../img/.png">Download</a>
                  </div>
               </div>
            </div>
         </div>
         <img class="img-footing" src="../img/medicoescota.png">
      </main>

      <script>
         $(".button a").click(function(e){
            e.preventDefault();
         });

         var myFullpage = new fullpage("#fullpage", {
            anchors: ["intro", "goals"],
            scrollBar: true,
            easing: "easeInOutCubic"
         });
      </script>
      <?php
         include_once "includes/footer.php";
      ?>
   </body>
</html>
