<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
            
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140688859-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-140688859-1');
        </script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <link rel="stylesheet" href="../materialize/css/materialize.css">
      <script src="../materialize/js/materialize.min.js"></script>

      <link href="../lightbox2/dist/css/lightbox.css" rel="stylesheet">
      <script src="../lightbox2/dist/js/lightbox.js"></script>

      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/qualidade.css">
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-heading" src="../img/medicoescota.png">
            </div>
         </div>
         <div class="div-wrapper">
            <div class="div-container" id="div-texto">
               <p><b>The biggest challenge on</b> SOPAIS – COMPONENTES METÁLICOS, LDA. entrepreneurial orientation <b> is to serve clients with excellence. </b> Due to that our production quality is certified to ISO 9001 & IATF 16949 for the automotive industry also, within those certifications, we own a metrological lab that helps us serving better the high demanding industries that we produce for.<br>
                  Now-a-days <b> companies are key part of the community where it is established. </b> Issues like the ecological footprint caused by its production must be solved by the company itself as well as taking care of its employees health and safety must be one of the company’s first concerns – like a family take care of their child –, that is why we managed to be certified to ISO 14001 & OHSAS 18001.</p>
            </div>
         </div>

         <div class="div-wrapper">
            <div class="div-container" id="div-certs">
               <div class="div-box" id="color1">
                  <a class="lbox" href="../img/certs/IATF16949PT_1.png" data-lightbox="Certificado IATF 16949" data-title="Certificado IATF 16949">
                     <img class="img-certif" src="../img/certs/IATF16949-E.png">
                     <h4>IATF 16949</h4>
                     <p>Provides credibility to produce metal parts for the automotive industry</p>
                  </a>
                  <a class="lbox" href="../img/certs/IATF16949PT_2.png" data-lightbox="Certificado IATF 16949" data-title="Certificado IATF 16949"></a>
                  <div class="button">
                     <a download="CertificadoIATF16949" href="../img/certs/IATF16949PT.pdf">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color1">
                  <a class="lbox" href="../img/certs/ISO9001PT.png" data-lightbox="Certificado ISO 9001" data-title="Certificado ISO 9001">
                     <img class="img-certif" src="../img/certs/ISO9001Qu-E.png">
                     <h4>ISO 9001</h4>
                     <p>Enables more efficiency leveraging at the same time the quality standards</p>
                  </a>
                  <div class="button">
                     <a download="CertificadoISO9001" href="../img/certs/ISO9001PT.pdf">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color2">
                  <a class="lbox" href="../img/certs/ISO14001_2.png" data-lightbox="Certificado ISO 14001" data-title="Certificado ISO 14001">
                     <img class="img-certif" src="../img/certs/ISO14001.png">
                     <h4>ISO 14001</h4>
                     <p>Minimizes the environmental impact as well as it enhances the commitment with environmental protection</p>
                  </a>
                  <div class="button">
                     <a download="CertificadoISO14001" href="../img/certs/ISO14001.pdf">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color3">
                  <a class="lbox" href="../img/certs/OHSAS18001.png" data-lightbox="Certificado OHSAS 18001" data-title="Certificado OHSAS 18001">
                     <img class="img-certif" src="../img/certs/NP4397_OHSAS18001.png">
                     <h4>OHSAS 18001</h4>
                     <p>Certifies the commitment of the company with its collaborator’s health and security</p>
                  </a>
                  <div class="button">
                     <a download="CertificadoOHSAS18001" href="../img/certs/OHSAS18001.pdf">Download</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-footing" src="../img/medicoescota.png">
            </div>
         </div>
      </main>
      <script>
         $("nav a[href$='quality.php']").addClass("paginaatual");

         $(document).ready(function() {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);

            lightbox.option({
               "resizeDuration": 200,
               "wrapAround": true,
               "disableScrolling": true,
               "fadeDuration": 500,
               "imageFadeDuration": 500,
               "resizeDuration": 500
            });
         });
      </script>
      <?php
         include_once "includes/aside.php";
         include_once "includes/footer.php";
      ?>
   </body>
</html>
