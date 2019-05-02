<?php
   include_once "../backend/database.php";

   $ultimoPost = $_POST["ultimoPost"];

   if (isset($_POST)) {
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
   }
?>
