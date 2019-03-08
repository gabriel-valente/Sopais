<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Sopais</title>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/contactos.css">
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <img class="img-heading" src="https://i.imgur.com/ic9nTKH.jpg">
         <div class="div-wrapper">
               <div class="mapouter">
                  <div class="gmap_canvas">
                     <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=40.775443%2C%20-8.590434&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>
                  </div>
               </div>
            <div class="div-container">
               <div class="div-content">
                  <h6>Endereço</h6>
                  <p>Eco-Parque Empresarial Estarreja<br>Rua de Canelas, nº3<br>3860-529 Estarreja, Portugal</p>
               </div>
               <div class="div-content">
                  <h6>Fale Conosco</h6>
                  <p>Tel.: (+351) 234 548 137<br>E-mail: geral@sopais.pt</p>
               </div>
            </div>
            <div class="div-container">
               <div class="div-content icons">
                  <a class="link" target="_blank" href="https://www.facebook.com/sopaislda" id="noScript">
                     <img class="social" src="../img/icons/facebookbox.png">
                  </a>
                  <a class="link" target="_blank" href="https://www.youtube.com/channel/UCUwKckOoooyihJaUKwSuMIQ" id="noScript">
                     <img class="social" src="../img/icons/youtubebox.png">
                  </a>
                  <a class="link" target="_blank" href="https://www.linkedin.com/company/sopais?trk=tyah&trkInfo=tarId%3A1397663293041%2Ctas%3Asopais%2Cidx%3A1-1-1" id="noScript">
                     <img class="social" src="../img/icons/linkedinbox.png">
                  </a>
               </div>
               <div class="div-content">
                  <form action="../backend/send.php" method="post">
                     <p>Nome:</p>
                     <input type="text" name="nome" value="" placeholder="Nome" maxlength="60" required>
                     <p>Email:</p>
                     <input type="text" name="email" value="" placeholder="Email" maxlength="256" required>
                     <p>Mensagem:</p>
                     <textarea name="mensagem" rows="16" cols="80" placeholder="Mensagem" maxlength="512" required></textarea>
                     <input type="submit" name="submit" value="Enviar">
                  </form>
               </div>
            </div>
         </div>
      </main>
      <?php
         include_once "includes/footer.php";
      ?>
   </body>
</html>
