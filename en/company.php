<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <link rel="stylesheet" type="text/css" href="../fullPage.js/dist/fullpage.css" />
      <script type="text/javascript" src="../fullPage.js/dist/fullpage.js"></script>

      <link rel="stylesheet" href="../materialize/css/materialize.css">
      <script src="../materialize/js/materialize.min.js"></script>

      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/empresa.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main id="fullpage">
         <div class="section" id="section0">
            <img class="img-heading" src="../img/drone.png">
            <div class="div-wrapper">
               <p id="p-texto"><i>Sopais – Componentes Metálicos, Lda. </i> was <b> founded in 1987. </b> Today the company counts with more than <b>30 years of experience </b> on the metalworking industry.<br><br>Based on the know-how achieved with the enterprise experience on the sector it finds differentiation on its facilities, technology and qualified, flexible and professional human resources. With a <b> tailored offer </b><i> SOPAIS </i> wants to settle on the market as <b> top of mind brand to produce metal parts.</b></p>
            </div>
         </div>
         <div class="section" id="section1">
            <div class="div-wrapper">
               <div class="div-division flow division-top imgbuttons">
                  <img class="normal" src="../img/icons/visao.png" id="1" onclick="mudar($(this).attr('id'));">
                  <img class="selected" src="../img/icons/missao.png" id="2" onclick="mudar($(this).attr('id'));">
                  <img class="normal" src="../img/icons/valores.png" id="3" onclick="mudar($(this).attr('id'));">
               </div>
               <div class="div-container" id="div-azul">
                  <div class="div-box hidden" id="1">
                     <h3>Vision</h3>
                     <p>To be on the top tier metal working companies to be consulted by the major international groups that need metallic parts on their products.</p>
                  </div>
                  <div class="div-box shown" id="2">
                     <h3>Mission</h3>
                     <p>Develop, produce and commercialize metal parts for various industry sectors with excellence. We strive to fit our clients needs with our products; quality, pricing, delivery deadlines and win-win partnerships are some of the factors that are relevant on our daily routine. We desire to be known as a cooperative and trustable organization among our suppliers as well as a company that’s concerned with a good labor environment for the employees.</p>
                  </div>
                  <div class="div-box hidden" id="3">
                     <h3>Values</h3>
                     <p>Client satisfaction;<br>Lean thinking;<br>Environmental care;<br>Health and safety first;<br>Meet the legal requirements applied on the industry;<br>Focus on results;<br>Trust;<br>Professional valorization and respect;<br>Innovation.</p>
                  </div>
               </div>
            </div>
         </div>
         <img class="img-footing" src="../img/drone.png">
      </main>

      <script>
         function mudar(id) {
            $("#div-azul").find(".div-box").removeClass("shown").addClass("hidden");
            $("#div-azul").find("#" + id).removeClass("hidden").addClass("shown");
            $(".imgbuttons").find("img").removeClass("selected").addClass("normal");
            $(".imgbuttons").find("#" + id).removeClass("normal").addClass("selected");
         }

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
