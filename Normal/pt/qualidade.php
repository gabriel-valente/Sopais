<!DOCTYPE html>
<html lang="pt">
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
               <p><b>O maior desafio da mentalidade empresarial</b> da SOPAIS – COMPONENTES METÁLICOS, LDA. <b>é servir os clientes com o máximo de excelência</b>, por isso, a qualidade da nossa produção é certificada para o ISO 9001 e IATF 16949 na indústria automóvel, e, para cumprir todos os requisitos das exigentes indústrias para quem trabalhamos, dispomos de um laboratório metrológico.<br>
                  Nos dias de hoje <b>as empresas são parte integrante das comunidades onde se inserem.</b> Problemas como a pegada ecológica resultante da produção têm que ser resolvidos pelas próprias empresas, ou, ainda, a saúde e segurança dos colaboradores, que deve ser encarada como uma das principais preocupações da empresa, são geridos pela SOPAIS pelo cumprimento das normas ISO 14001 e OHSAS 18001.</p>
            </div>
         </div>
         <div class="div-wrapper">
            <div class="div-container" id="div-certs">
               <div class="div-box" id="color1">
                  <a class="lbox" href="../img/certs/IATF16949PT_1.png" data-lightbox="Certificado IATF 16949" data-title="Certificado IATF 16949">
                     <img class="img-certif" src="../img/certs/IATF16949-E.png">
                     <h4>IATF 16949</h4>
                     <p>Sistemas de Gestão de Qualidade para a Indústria Automóvel</p>
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
                     <p>Sistemas de Gestão de Qualidade</p>
                  </a>
                  <div class="button">
                     <a download="CertificadoISO9001" href="../img/certs/ISO9001PT.pdf">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color2">
                  <a class="lbox" href="../img/certs/ISO14001_2.png" data-lightbox="Certificado ISO 14001" data-title="Certificado ISO 14001">
                     <img class="img-certif" src="../img/certs/ISO14001.png">
                     <h4>ISO 14001</h4>
                     <p>Sistemas de Gestão Ambiental</p>
                  </a>
                  <div class="button">
                     <a download="CertificadoISO14001" href="../img/certs/ISO14001.pdf">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color3">
                  <a class="lbox" href="../img/certs/OHSAS18001.png" data-lightbox="Certificado OHSAS 18001" data-title="Certificado OHSAS 18001">
                     <img class="img-certif" src="../img/certs/NP4397_OHSAS18001.png">
                     <h4>OHSAS 18001</h4>
                     <p>Sistemas de Gestão de Saúde e Segurança no Trabalho</p>
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
         $("nav a[href$='qualidade.php']").addClass("paginaatual");
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
