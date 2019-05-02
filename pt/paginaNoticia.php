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
      <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=75m26byuv004g3ef1g0nt44veoaej2ja385dzy5fynrjt9jm"></script>

      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/noticias.css">
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
                     header("Location: noticias.php");
                     exit();
                  } else {
                     $noticia = $url["query"];
                  }

                  include_once "../backend/database.php";
                  $queryNoticia = $connection->prepare("SELECT Titulo, Imagem, Conteudo, DataPublicacao FROM Noticia WHERE Key_Noticia = :Key");
                  $queryNoticia->bindParam(":Key", $url["query"], PDO::PARAM_STR);
                  $queryNoticia->execute();

                  if ($queryNoticia->rowCount() == 0) {
                     header("Location: noticias.php");
                  } elseif ($queryNoticia->rowCount() > 1) {
                     header("Location: noticias.php");
                  } else {
                     $resultado = $queryNoticia->fetchAll();

                     $Titulo = $resultado[0]["Titulo"];
                     setlocale(LC_ALL, 'pt_PT', 'pt_PT.utf-8', 'pt_PT.utf-8', 'portuguese');
                     $DataPublicacao = ucfirst(utf8_encode(strftime("%d %B, %Y &agrave;s %H:%M", strtotime($resultado[0]["DataPublicacao"]))));
                     $imagem = "data:image/jpeg;base64,".base64_encode($resultado[0]["Imagem"]);
                     $Conteudo = $resultado[0]["Conteudo"];
                  }
                  $queryNoticia->closeCursor();

                  echo '<h3 id="titulo">'.$Titulo.'</h3>';
                  echo '<p id="data">'.$DataPublicacao.'</p>';
               ?>
            </div>
            <article>
               <?php echo $Conteudo; ?>
            </article>
         </div>
      </main>
      <?php
         include_once "includes/aside.php";
         include_once "includes/footer.php";
      ?>
   </body>
</html>



Array (
   [0] => Array (
      [0] => hum
      [1] => 0
   )
   [1] => Array (
      [0] => hum
      [1] => 1
   )
)
