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

                  $conteudo = array();

                  $queryNoticia = $connection->prepare("SELECT Titulo, DataPublicacao FROM Noticia WHERE Key_Noticia = :Key");
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
                  }
                  $queryNoticia->closeCursor();

                  $queryImagens = $connection->prepare("SELECT Key_Imagem, Imagem, Index_Imagem FROM Imagem WHERE Key_Noticia = :Key ORDER BY Index_Imagem");
                  $queryImagens->bindParam(":Key", $url["query"], PDO::PARAM_STR);
                  $queryImagens->execute();

                  if ($queryImagens->rowCount() >= 1) {
                     foreach ($queryImagens->fetchAll() as $resultado) {
                        array_push($conteudo, array(
                           $resultado["Key_Imagem"],
                           "data:image/jpeg;base64,".base64_encode($resultado["Imagem"]),
                           $resultado["Index_Imagem"]
                        ));
                     }
                  }
                  $queryImagens->closeCursor();

                  $queryTexto = $connection->prepare("SELECT Key_Texto, Texto, Index_Texto FROM Texto WHERE Key_Noticia = :Key ORDER BY Index_Texto");
                  $queryTexto->bindParam(":Key", $url["query"], PDO::PARAM_STR);
                  $queryTexto->execute();

                  if ($queryTexto->rowCount() >= 1) {
                     foreach ($queryTexto->fetchAll() as $resultado) {
                        array_push($conteudo, array(
                           $resultado["Key_Texto"],
                           $resultado["Texto"],
                           $resultado["Index_Texto"]
                        ));
                     }
                  }
                  $queryTexto->closeCursor();

                  usort($conteudo, function($a, $b) {
                     return $a[2] - $b[2];
                  });

                  echo '<h3 id="titulo">'.$Titulo.'</h3>';
                  echo '<p id="data">'.$DataPublicacao.'</p>';

                  if (strpos($conteudo[0][1], 'data:image/jpeg;base64,') !== false) {
                     echo '<img id="imagem" src="'.$conteudo[0][1].'">';
                  }
               ?>
            </div>
            <article>
               <?php
                  foreach ($conteudo as $item) {
                     print_r($item);
                     exit();
                  }
               ?>
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
