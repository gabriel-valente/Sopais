<!DOCTYPE html>
<html lang="en">
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

      <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cd1a45e84760c0019807bcb&product=sop' async='async'></script>
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <div class="div-wrapper wide">
            <div class="div-header">
               <?php
                  $url = parse_url($_SERVER["REQUEST_URI"]);

                  if (empty($url["query"])) {
                     echo "<script type='text/javascript'>window.top.location='en/news.php';</script>";
                     exit();
                  } else {
                     $noticia = $url["query"];
                  }

                  include_once "../backend/database.php";
                  $queryNoticia = $connection->prepare("SELECT TituloEN, Imagem, ConteudoEN, DataPublicacao FROM Noticia WHERE Key_Noticia = :Key");
                  $queryNoticia->bindParam(":Key", $url["query"], PDO::PARAM_STR);
                  $queryNoticia->execute();

                  if ($queryNoticia->rowCount() == 0) {
                     header("Location: news.php");
                  } elseif ($queryNoticia->rowCount() > 1) {
                     header("Location: news.php");
                  } else {
                     $resultado = $queryNoticia->fetchAll();

                     $Titulo = utf8_encode($resultado[0]["TituloEN"]);
                     setlocale(LC_ALL, 'en', 'en.utf-8', 'en.utf-8', 'english');
                     $DataPublicacao = ucfirst(utf8_encode(strftime("%d %B, %Y at %I:%M %p", strtotime($resultado[0]["DataPublicacao"]))));
                     $imagem = "data:image/jpeg;base64,".base64_encode($resultado[0]["Imagem"]);
                     $Conteudo = utf8_encode($resultado[0]["ConteudoEN"]);
                  }
                  $queryNoticia->closeCursor();

                  echo '<h3 id="titulo">'.$Titulo.'</h3>';
                  echo '<p id="data">'.$DataPublicacao.'</p>';
                  echo '<img id="imagemHeader" src="'.$imagem.'">';
               ?>
            </div>
            <article>
               <?php echo $Conteudo; ?>
            </article>
            <div class="sharethis-inline-share-buttons"></div>
         </div>
      </main>
      <script>
      $("nav a[href$='news.php']").addClass("paginaatual");
      </script>
      <?php
         include_once "includes/aside.php";
         include_once "includes/footer.php";
      ?>
   </body>
</html>
