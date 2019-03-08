<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Sopais</title>
   </head>
   <body>
      <?php
         require_once("geoplugin.class.php");
         $geoplugin = new geoPlugin();
         $geoplugin->locate();

         $var_country_code = $geoplugin->countryCode;

         if ($var_country_code == "PT") {
            header("Location: pt/inicio.php");
         }
         else {
            header("Location: en/home.php");
         }
      ?>
   </body>
</html>
