<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/contactos.css">
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <img class="img-heading" src="https://i.imgur.com/ic9nTKH.jpg">
         <div class="div-wrapper">
               <div class="mapouter">
                  <div class="gmap_canvas">
                     <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=40.775443%2C%20-8.590434&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>
                  </div>
               </div>
            <div class="div-container">
               <div class="div-content">
                  <h6>Address</h6>
                  <p>Eco-Parque Empresarial Estarreja<br>Rua de Canelas, nº3<br>3860-529 Estarreja, Portugal</p>
               </div>
               <div class="div-content">
                  <h6>Contact us</h6>
                  <p>Tel.: (+351) 234 548 137<br>E-mail: geral@sopais.pt</p>
               </div>
            </div>
            <div class="div-container">
               <div class="div-content icons">
                  <a class="link" target="_blank" href="https://www.facebook.com/sopaislda" id="noScript">
                     <img class="social" src="../img/icons/facebookbox.png">
                  </a>
                  <a class="link" target="_blank" href="https://www.youtube.com/channel/UCUwKckOoooyihJaUKwSuMIQ" id="noScript">
                     <img class="social" src="../img/icons/youtubebox.png">
                  </a>
                  <a class="link" target="_blank" href="https://www.linkedin.com/company/sopais?trk=tyah&trkInfo=tarId%3A1397663293041%2Ctas%3Asopais%2Cidx%3A1-1-1" id="noScript">
                     <img class="social" src="../img/icons/linkedinbox.png">
                  </a>
               </div>
               <div class="div-content form">
                  <form id="formulario" name="formulario" action="../backend/send.php" method="post">
                     <p>Name:<br>
                        <input type="text" id="nome" name="nome" value="" placeholder="Name" maxlength="60" required>
                     </p>
                     <p>Email:<br>
                     <input type="text" id="email" name="email" value="" placeholder="Email" maxlength="256" required>
                     </p>
                     <p>Message:<br>
                     <textarea id="mensagem" name="mensagem" rows="16" cols="80" placeholder="Message" maxlength="512" required></textarea>
                     </p>
                     <input type="submit" id="submit" name="submit" value="Send">
                  </form>
                  <h4 id="form-report"></h4>
               </div>
            </div>
         </div>
      </main>

      <script>
         function Styling(input, action) {
            if (action == "Error") {
               document.getElementById(input).classList.add("form-input-erro");
            } else if (action == "Valid") {
               document.getElementById(input).classList.remove("form-input-erro");
            }
         }

         var Timer;
         var Intervalo = 500;

         $("#nome").on("blur", function() {
            $.ajax({
               type: "POST",
               url: "../backend/validations/nome.php",
               data: {
                  nome: formulario.nome.value
               },
               success: function(output) {
                  Styling("nome", output);
               }
            });
         });
         $("#nome").on("keyup", function() {
            clearTimeout(Timer);
            Timer = setTimeout(function() {
               $.ajax({
                  type: "POST",
                  url: "../backend/validations/nome.php",
                  data: {
                     nome: formulario.nome.value
                  },
                  success: function(output) {
                     Styling("nome", output);
                  }
               });
            }, Intervalo);
         });
         $("#nome").on("keydown", function() {
            clearTimeout(Timer);
         });

         $("#email").on("blur", function() {
            $.ajax({
               type: "POST",
               url: "../backend/validations/email.php",
               data: {
                  email: formulario.email.value
               },
               success: function(output) {
                  Styling("email", output);
               }
            });
         });
         $("#email").on("keyup", function() {
            clearTimeout(Timer);
            Timer = setTimeout(function() {
               $.ajax({
                  type: "POST",
                  url: "../backend/validations/email.php",
                  data: {
                     email: formulario.email.value
                  },
                  success: function(output) {
                     Styling("email", output);
                  }
               });
            }, Intervalo);
         });
         $("#email").on("keydown", function() {
            clearTimeout(Timer);
         });

         $("#mensagem").on("blur", function() {
            $.ajax({
               type: "POST",
               url: "../backend/validations/mensagem.php",
               data: {
                  mensagem: formulario.mensagem.value
               },
               success: function(output) {
                  Styling("mensagem", output);
               }
            });
         });
         $("#mensagem").on("keyup", function() {
            clearTimeout(Timer);
            Timer = setTimeout(function() {
               $.ajax({
                  type: "POST",
                  url: "../backend/validations/mensagem.php",
                  data: {
                     mensagem: formulario.mensagem.value
                  },
                  success: function(output) {
                     Styling("mensagem", output);
                  }
               });
            }, Intervalo);
         });
         $("#mensagem").on("keydown", function() {
            clearTimeout(Timer);
         });

         $("#formulario").submit(function(e) {
         e.preventDefault();
         $.ajax({
            type: "POST",
            url: "../backend/validations/nome.php",
            data: {
               nome: formulario.nome.value
            },
            success: function(output) {
               if (output == "Error") {
                  Styling("nome", output);
               } else if (output == "Valid") {
                  $.ajax({
                     type: "POST",
                     url: "../backend/validations/email.php",
                     data: {
                        email: formulario.email.value
                     },
                     success: function(output) {
                        if (output == "Error") {
                           Styling("email", output);
                        } else if (output == "Valid") {
                           $.ajax({
                              type: "POST",
                              url: "../backend/validations/mensagem.php",
                              data: {
                                 mensagem: formulario.mensagem.value
                              },
                              success: function(output) {
                                 if (output == "Error") {
                                    Styling("mensagem", output);
                                 } else if (output == "Valid") {
                                    $.ajax({
                                       type: "POST",
                                       url: "../backend/send.php",
                                       data: {
                                          nome: formulario.nome.value,
                                          email: formulario.email.value,
                                          mensagem: formulario.mensagem.value
                                       },
                                       success: function(output) {
                                          if (output == "Sent") {
                                             $("#nome").val("");
                                             $("#email").val("");
                                             $("#mensagem").val("");

                                             $("#form-report").html("Message sent! We will respond soon!");
                                          } else if (output == "Error") {
                                             $("#form-report").html("Couldn't send the message! Please try again in a few moments.");
                                          } else if (output == "EmailError") {
                                             $("#form-report").html("The message was not sent correctly! We can take some time to respond!");
                                          }
                                       }
                                    });
                                 }
                              }
                           });
                        }
                     }
                  });
               }
            }
         });
      })

      </script>
      <?php
         include_once "includes/footer.php";
      ?>
   </body>
</html>
