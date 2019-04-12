<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="../js/pageChange.js"></script>

      <link rel="stylesheet" type="text/css" href="../fullPage.js/dist/fullpage.css" />
      <script type="text/javascript" src="../fullPage.js/dist/fullpage.js"></script>

   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main id="fullpage">
         <div class="section" id="section0">
            <video autoplay muted loop>
               <source src="../img/video.mp4" type="video/mp4">
            </video>
            <article>
               <h1 class="heading">"Excellence tailored for your products."</h1>
            </article>
         </div>
      </main>

      <script>
         var myFullpage = new fullpage("#fullpage", {
            anchors: ["firstPage", "secondPage", "3rdPage"],
            scrollBar: true,
            licenseKey:"OPEN-SOURCE-GPLV3-LICENSE"
         });
      </script>
   </body>
</html>
