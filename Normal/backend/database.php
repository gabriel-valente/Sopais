<?php
   try {
      $connection = new PDO("mysql:host=localhost;dbname=sopaispt_website", "sopaispt", "hM1aS0pb74");
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e)
   {
      echo "Sem Conexão! Não é possivel comunicar com o servidor!";
   }
?>
