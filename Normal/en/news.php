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
            <?php
               include_once "../backend/database.php";

               $contagem;
               $ultimoPost = 0;

               $queryVerificar = $connection->prepare("SELECT COUNT(key_Noticia) AS 'Contagem' FROM Noticia");
               $queryVerificar->execute();

               if ($queryVerificar->rowCount() == 0) {
                  echo "Error connecting to the server!";

                  $queryVerificar->closeCursor();
               } else {
                  $resultado = $queryVerificar->fetch(PDO::FETCH_OBJ);
                  $contagem = $resultado->Contagem;

                  $queryVerificar->closeCursor();

                  $queryLoadNoticias = $connection->prepare("SELECT Key_Noticia, TituloEN, Imagem, DataPublicacao FROM Noticia ORDER BY DataPublicacao DESC LIMIT 1");
                  $queryLoadNoticias->execute();

                  if ($queryLoadNoticias->rowCount() == 1) {
                     foreach ($queryLoadNoticias->fetchAll() as $resultado) {
                        if (strlen(utf8_encode($resultado["TituloEN"])) > 60) {
                           $titulo = mb_substr(utf8_encode($resultado["TituloEN"]), 0, 60)."<code>...</code>";
                        } else {
                           $titulo = utf8_encode($resultado["TituloEN"]);
                        }

                        setlocale(LC_ALL, 'en', 'en.utf-8', 'en.utf-8', 'english');
                        echo '<div class="div-content masterPost artigo" id="'.$resultado["Key_Noticia"].'">
                        <div class="image-container">
                        <img id="imagem" src="data:image/jpeg;base64,'.base64_encode($resultado["Imagem"]).'">
                        </div>
                        <h4 id="Data">'.ucfirst(utf8_encode(strftime("%d %B, %Y at %I:%M %p", strtotime($resultado["DataPublicacao"])))).'</h4>
                        <h3 id="titulo">'.$titulo.'</h3>
                        </div>';
                     }
                  }
                  $queryLoadNoticias->closeCursor();
               }
            ?>
            <div class="div-division" id="div-noticias">
               <div class="div-container flow" id="noticias">
                  <?php
                     if ($contagem >= 1) {
                        $ultimoPost++;

                        $queryLoadNoticias = $connection->prepare("SELECT Key_Noticia, TituloEN, Imagem, DataPublicacao FROM Noticia ORDER BY DataPublicacao DESC LIMIT ".($ultimoPost).",6");
                        $queryLoadNoticias->execute();

                        if ($queryLoadNoticias->rowCount() >= 1) {
                           foreach ($queryLoadNoticias->fetchAll() as $resultado) {
                              $ultimoPost++;
                              if (strlen(utf8_encode($resultado["TituloEN"])) > 60) {
                                 $titulo = mb_substr(utf8_encode($resultado["TituloEN"]), 0, 60)."<code>...</code>";
                              } else {
                                 $titulo = utf8_encode($resultado["TituloEN"]);
                              }

                              setlocale(LC_ALL, 'en', 'en.utf-8', 'en.utf-8', 'english');
                              echo '<div class="div-content post artigo" id="'.$resultado["Key_Noticia"].'" cont="'.$ultimoPost.'">
                              <div class="image-container">
                              <img id="imagem" src="data:image/jpeg;base64,'.base64_encode($resultado["Imagem"]).'">
                              </div>
                              <h4 id="Data">'.ucfirst(utf8_encode(strftime("%d %B, %Y at %I:%M %p", strtotime($resultado["DataPublicacao"])))).'</h4>
                              <h3 id="titulo">'.$titulo.'</h3>
                              </div>';
                           }
                        }
                        $queryLoadNoticias->closeCursor();
                     } else {
                        echo "There is no news yet.";
                     }
                  ?>
               </div>
            </div>

            <?php
               if ($contagem > $ultimoPost) {
                  $class = "btn-visible";
               } else if ($contagem == 0 || $contagem <= $ultimoPost) {
                  $class = "btn-hidden";
               }

               echo '<div class="div-load '.$class.'">
                  <div class="botao loadMore" id="'.$ultimoPost.'">
                     <p>Load More</p>
                     <img src="../img/icons/arrow-dwn.png">
                  </div>
               </div>';
            ?>
         </div>
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-footing" src="../img/noticias.jpg">
            </div>
         </div>
      </main>
      <script>
         $("nav a[href$='news.php']").addClass("paginaatual");

         $(document).on('click','.loadMore',function(){
            var ultimoPost = parseInt($("#noticias .div-content.post:last").attr('cont'));
            var contagem = <?php echo $contagem; ?>;
            $.ajax({
               type:'POST',
               url:'../backend/loadNews.php',
               data: {
                  ultimoPost: ultimoPost,
                  language: "EN"
               },
               success:function(result){
                  $('.loadMore').attr("id", ultimoPost + 1);
                  $('#noticias').append(result);
                  if (ultimoPost = contagem) {
                     $(".div-load").removeClass("btn-visible");
                     $(".div-load").addClass("btn-hidden");
                  }
               }
            });
         });

         $(document).on('click','.artigo',function(){
            id = $(this).attr("id");
            window.location = "newsPage.php?" + id;
         });

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
