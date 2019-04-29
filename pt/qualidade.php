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
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-heading" src="../img/medicoescota.png">
            </div>
         </div>
         <div class="div-wrapper">
            <div class="div-container" id="div-texto">
               <div class="div-imagetext">
                  <img src="../img/medicao.png">
                  <h1>METROLOGIA</h1>
               </div>
               <p><b>O maior desafio da mentalidade empresarial</b> da SOPAIS – COMPONENTES METÁLICOS, LDA. <b>é servir os clientes com o máximo de excelência</b>, por isso, a qualidade da nossa produção é certificada para o ISO 9001 e IATF 16949 na indústria automóvel.<br>
                  Nos dias de hoje <b>as empresas são parte integrante das comunidades onde se inserem.</b> Problemas como a pegada ecológica resultante da produção têm que ser resolvidos pelas próprias empresas, ou, ainda, a saúde e segurança dos colaboradores, que deve ser encarada como uma das principais preocupações da empresa, são geridos pela SOPAIS pelo cumprimento das normas ISO 14001 e OHSAS 18001.</p>
            </div>
         </div>
         <div class="div-wrapper">
            <div class="div-container" id="div-certs">
               <div class="div-box" id="color1">
                  <img class="img-certif" src="../img/certs/IATF16949-E.png">
                  <h4>IATF 16949</h4>
                  <p>Sistemas de Gestão de Qualidade para a Indústria Automóvel</p>
                  <div class="button">
                     <a download="CertificadoIATF16949" href="../img/certs/IATF16949-E.png">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color1">
                  <img class="img-certif" src="../img/certs/ISO9001Qu-E.png">
                  <h4>ISO 9001</h4>
                  <p>Sistemas de Gestão de Qualidade</p>
                  <div class="button">
                     <a download="CertificadoISO9001" href="../img/certs/ISO9001Qu-E.png">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color2">
                  <img class="img-certif" src="../img/certs/ISO14001.png">
                  <h4>ISO 14001</h4>
                  <p>Sistemas de Gestão Ambiental</p>
                  <div class="button">
                     <a download="CertificadoISO14001" href="../img/certs/ISO14001.png">Download</a>
                  </div>
               </div>
               <div class="div-box" id="color3">
                  <img class="img-certif" src="../img/certs/NP4397_OHSAS18001.png">
                  <h4>OHSAS 18001</h4>
                  <p>Sistemas de Gestão de Saúde e Segurança no Trabalho</p>
                  <div class="button">
                     <a download="CertificadoOHSAS18001" href="../img/certs/NP4397_OHSAS18001.png">Download</a>
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
         $(document).ready(function() {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);
         });
      </script>
      <?php
         include_once "includes/aside.php";
         include_once "includes/footer.php";
      ?>
   </body>
</html>
