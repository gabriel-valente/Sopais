<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
   </head>
   <body>
      <?php
         require_once("geoplugin.class.php");
         $geoplugin = new geoPlugin();
         $geoplugin->locate();

         $var_country_code = $geoplugin->countryCode;

         if ($var_country_code == "PT") {
            echo "<script type='text/javascript'>window.top.location='pt/inicio.php';</script>";
            exit();
         }
         else {
            echo "<script type='text/javascript'>window.top.location='en/home.php';</script>";
            exit();
         }
      ?>
   </body>
</html>
