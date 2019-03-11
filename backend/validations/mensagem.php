<?php
   $mensagem = $_POST["mensagem"];

   if (strlen($mensagem) < 10 || strlen($mensagem) > 65535) {
      echo "Error";
      exit();
   } else {
      echo "Valid";
      exit();
   }
?>
