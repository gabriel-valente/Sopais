<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/header.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<header>
   <div class="div-nav-desktop">
      <img src="img/logo.png">
      <p class="name"><b>SOPAIS -</b><i> Componentes Metálicos Lda.</i></p>
      <nav>
         <a class="item" href="index.php">Inicio</a>
         <a class="item" href="index.php">A Empresa</a>
         <a class="item" href="index.php">O Que Fazemos</a>
         <a class="item" href="index.php">Qualidade</a>
         <a class="item" href="index.php">Notícias</a>
         <a class="item" href="index.php">Contactos</a>
      </nav>
      <div class="lang">
         <a href="index.php">PT</a>
         <a href="index.php">EN</a>
      </div>
   </div>
   <div class="div-nav-mobile">
      <img src="img/logo.png">
      <a href="javascript:void(0);" class="icon" onclick="ClassChanger()">
         <img class="icon" src="img/icons/menu.png">
      </a>
      <nav>
         <a class="item" href="index.php">Inicio</a>
         <a class="item" href="index.php">A Empresa</a>
         <a class="item" href="index.php">O Que Fazemos</a>
         <a class="item" href="index.php">Qualidade</a>
         <a class="item" href="index.php">Notícias</a>
         <a class="item" href="index.php">Contactos</a>

         <div class="language">
            <a class="itemLang langSel" href="index.php">PT</a>
            <a class="itemLang" href="index.php">EN</a>
         </div>
      </nav>
   </div>
</header>
<script>

function ClassChanger() {
   var x = $("nav");

   if (x.hasClass("responsive")) {
      x.removeClass("responsive");
   } else {
      x.addClass("responsive");
   }
}
</script>
