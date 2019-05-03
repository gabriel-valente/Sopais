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
            <?php
               include_once "../backend/database.php";

               $contagem;
               $ultimoPost = 0;

               $queryVerificar = $connection->prepare("SELECT COUNT(key_Noticia) AS 'Contagem' FROM Noticia");
               $queryVerificar->execute();

               if ($queryVerificar->rowCount() == 0) {
                  echo "Erro de coneção com o servidor!";

                  $queryVerificar->closeCursor();
               } else {
                  $resultado = $queryVerificar->fetch(PDO::FETCH_OBJ);
                  $contagem = $resultado->Contagem;

                  $queryVerificar->closeCursor();

                  $queryLoadNoticias = $connection->prepare("SELECT Key_Noticia, Titulo, Imagem, DataPublicacao FROM Noticia ORDER BY DataPublicacao DESC LIMIT 1");
                  $queryLoadNoticias->execute();

                  if ($queryLoadNoticias->rowCount() == 1) {
                     foreach ($queryLoadNoticias->fetchAll() as $resultado) {
                        setlocale(LC_ALL, 'pt_PT', 'pt_PT.utf-8', 'pt_PT.utf-8', 'portuguese');
                        echo '<div class="div-content masterPost artigo" id="'.$resultado["Key_Noticia"].'">
                        <div class="image-container">
                        <img id="imagem" src="data:image/jpeg;base64,'.base64_encode($resultado["Imagem"]).'">
                        </div>
                        <h4 id="Data">'.ucfirst(utf8_encode(strftime("%d %B, %Y &agrave;s %H:%M", strtotime($resultado["DataPublicacao"])))).'</h4>
                        <h3 id="titulo">'.utf8_encode($resultado["Titulo"]).'</h3>
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

                        $queryLoadNoticias = $connection->prepare("SELECT Key_Noticia, Titulo, Imagem, DataPublicacao FROM Noticia ORDER BY DataPublicacao DESC LIMIT ".($ultimoPost).",6");
                        $queryLoadNoticias->execute();

                        if ($queryLoadNoticias->rowCount() >= 1) {
                           foreach ($queryLoadNoticias->fetchAll() as $resultado) {
                              $ultimoPost++;
                              setlocale(LC_ALL, 'pt_PT', 'pt_PT.utf-8', 'pt_PT.utf-8', 'portuguese');
                              echo '<div class="div-content post artigo" id="'.$resultado["Key_Noticia"].'" cont="'.$ultimoPost.'">
                              <div class="image-container">
                              <img id="imagem" src="data:image/jpeg;base64,'.base64_encode($resultado["Imagem"]).'">
                              </div>
                              <h4 id="Data">'.ucfirst(utf8_encode(strftime("%d %B, %Y &agrave;s %H:%M", strtotime($resultado["DataPublicacao"])))).'</h4>
                              <h3 id="titulo">'.utf8_encode($resultado["Titulo"]).'</h3>
                              </div>';
                           }
                        }
                        $queryLoadNoticias->closeCursor();
                     } else {
                        echo "Ainda não existe nenhuma notícia.";
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
                     <p>Carregar Mais</p>
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
         $("nav a[href$='noticias.php']").addClass("paginaatual");

         $(document).on('click','.loadMore',function(){
            var ultimoPost = parseInt($("#noticias .div-content.post:last").attr('cont'));
            var contagem = <?php echo $contagem; ?>;
            $.ajax({
               type:'POST',
               url:'../backend/loadNews.php',
               data: { ultimoPost: ultimoPost },
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
            window.location = "paginaNoticia.php?" + id;
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
