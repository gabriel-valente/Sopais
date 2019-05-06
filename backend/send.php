<?php
   include_once "database.php";

   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $mensagem = $_POST["mensagem"];
   $key = "";
   $a = -1;

   if (strlen($nome) < 4 || strlen($nome) > 60 || !preg_match("/^[a-záàâãäåæçèéêëìíîïðñòóôõøùúûüýþÿı ]*$/i", $nome)) {
      echo "Error";
      exit();
   } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 256) {
         echo "Error";
         exit();
      } else {
         if (strlen($mensagem) < 10 || strlen($mensagem) > 65535) {
            echo "Error";
            exit();
         } else {
            do {
               $a += 1;
               $key = KeyGenerator(4);

               $queryProcurarkey = $connection->prepare("SELECT * FROM mensagem WHERE Key_Mensagem = :Key");
               $queryProcurarkey->bindParam(":Key", $key, PDO::PARAM_STR);
               $queryProcurarkey->execute();

               if ($queryProcurarkey->rowCount() == 0) {
                  $queryProcurarkey->closeCursor();

                  break;
               }

            } while (true);
            $queryInserir = $connection->prepare("INSERT INTO mensagem(Key_Mensagem, Nome, Email, Mensagem) VALUES (:Key, :Nome, :Email, :Mensagem)");

            $queryInserir->bindParam(":Key", $key, PDO::PARAM_STR);
            $queryInserir->bindParam(":Nome", $nome, PDO::PARAM_STR);
            $queryInserir->bindParam(":Email", $email, PDO::PARAM_STR);
            $queryInserir->bindParam(":Mensagem", $mensagem, PDO::PARAM_STR);

            if ($queryInserir->execute()) {
               $queryInserir->closeCursor();
               $connection = null;

               echo "Sent";
            } else {
               $queryInserir->closeCursor();
               $connection = null;

               echo "Error";
               exit();
            }

            // include("Mail/Mail-1.4.1/Mail.php");
            // include("Mail_Mime/Mail_Mime-1.10.2/Mail/mime.php");
            //
            // $recipients = "gabrielmcv1@gmail.com"; //bruno.rodrigues@sopais.pt
            //
            // $text = "Utilizador: ".$email."   Mensagem: ".$mensagem;
            // $html = "<html>
            //             <body>
            //                <div>
            //                   <h3>Nome de Utilizador: <b>".$nome."</b></h3>
            //                   <h3>Email: <b>".$email."</b></h3>
            //                   <h3>Mensagem: </h3>
            //                   <pre style='font-family: sans-serif;'>".$mensagem."</pre>
            //                </div>
            //             </body>
            //          </html>";
            // $crlf = "\n";
            // $hdrs = array(
            //    "From"    => "recrutamento@sopais.pt",
            //    "To"      => $email,
            //    "Subject" => "Mensagem do Website"
            // );
            //
            // $mime = new Mail_mime(array('eol' => $crlf));
            //
            // $mime->setTXTBody($text);
            // $mime->setHTMLBody($html);
            //
            // $body = $mime->get();
            // $hdrs = $mime->headers($hdrs);
            //
            // $smtpinfo["host"] = "enterprise2n.ptservidor.net";
            // $smtpinfo["port"] = "465";
            // $smtpinfo["auth"] = true;
            // $smtpinfo["username"] = "recrutamento@sopais.pt";
            // $smtpinfo["password"] = "SOPAIX96";
            //
            // $mail =& Mail::factory("smtp", $smtpinfo);
            // $mail->send($recipients, $hdrs, $body);
            //
            // if (PEAR::isError($mail)) {
            //    echo "EmailError";
            // }

            exit();
         }
      }
   }

   function KeyGenerator($len){
      $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789+/');
      shuffle($seed);
      $rand = '';
      foreach (array_rand($seed, $len) as $k) $rand .= $seed[$k];

      return $rand;
   }
?>
