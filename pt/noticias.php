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
      <link rel="stylesheet" href="../css/noticias.css">
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-heading" src="../img/noticias.jpg">
            </div>
         </div>
         <div class="div-wrapper">
            <div class="div-content masterPost">
               <div class="image-container" id="">
                  <img id="imagem" src="http://images.unsplash.com/photo-1503249023995-51b0f3778ccf?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9">
               </div>
               <h3 id="titulo">Lorem ipsum dolor sit amet.</h3>
            </div>

            <!-- POST TEMPLATE
            <div class="div-content post">
               <div class="image-container" id="">
                  <img id="imagem" src="">
               </div>
               <h3 id="titulo"></h3>
            </div>
            -->
            <div class="div-container flow">
               <?php
               
               ?>
            </div>
            <div class="div-load">
               <div class="botao">
                  <p>Carregar Mais</p>
                  <img src="../img/icons/arrow-dwn.png">
               </div>
            </div>
         </div>
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-footing" src="../img/noticias.jpg">
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
