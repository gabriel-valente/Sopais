<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/header.css">
   <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<header>
   <nav class="topnav">
      <div class="div-container">
         <a class="link" href="index.php">
            <img class="menu" src="img/logo.png">
         </a>
      </div>
      <div class="div-container">
         <a class="link active" href="index.php">Inicio</a>
      </div>
      <div class="div-container">
         <a class="link" href="quemsomos.php">Quem somos</a>
      </div>
      <div class="div-container">
         <a class="link" href="index.php">Tecnologia</a>
      </div>
      <div class="div-container">
         <a class="link" href="index.php">Produtos</a>
      </div>
      <div class="div-container">
         <a class="link" href="index.php">Qualidade</a>
      </div>
      <div class="div-container">
         <a class="link" href="index.php">Contactos</a>
      </div>
      <div class="div-container">
         <a href="javascript:void(0);" class="icon" onclick="ClassChanger()">
            <img class="icon" src="img/icons/menu.png">
         </a>
      </div>
   </nav>
</header>
<script>
function ClassChanger() {
   var x = $(".topnav");

   if (x.hasClass("responsive")) {
      x.removeClass("responsive");
   } else {
      x.addClass("responsive");
   }
}
</script>
