<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/empresa.css">
   </head>
   <body onresize="UpdateWidth();">
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <img class="img-heading" src="https://i.imgur.com/ic9nTKH.jpg">
         <div class="div-wrapper">
            <p id="p-texto"><i>Sopais – Componentes Metálicos, Lda. </i> foi fundada em 1987 contando com mais de 30 anos de experiência na indústria metalomecânica.<br><br>Assente no know-how adquirido ao longo da sua história a empresa olha para as suas instalações, tecnologia e estrutura humana qualificada, flexível e profissional – capaz de abraçar projetos ambiciosos – como fatores que a diferenciam. Com uma oferta de excelência a empresa visa fixar-se no mercado como top of mind na indústria da produção de componentes metálicos para todos os setores.</p>
            <div class="div-container" id="div-azul">
               <div class="horizontal">
                  <div class="div-box">
                     <h3>Missão</h3>
                     <p>Desenvolver e dar soluções, produzir e comercializar com excelência, componentes metálicos para vários tipos de setores de atividade.<br><br>Procuramos sempre produzir produtos/serviços que satisfaçam integralmente os nossos clientes, assim como as suas exigências, privilegiando prazos de entrega, qualidade, preços e uma relação de plena confiança.<br><br>Com os nossos fornecedores privilegiamos uma relação de confiança e cooperação e pretendemos dispor aos nossos colaboradores as melhores condições que proporcionem um bom ambiente laboral criando uma equipa qualificada e competente.</p>
                  </div>
               </div>
               <div class="vertical">
                  <div class="div-box ignore">
                     <h3>Visão</h3>
                     <p>Ser uma das primeiras empresas a ser consultada, dentro da indústria metalomecânica, pelos grandes grupos internacionais que necessitarem de componentes metálicos.</p>
                  </div>
                  <div class="div-box ignore">
                     <h3>Valores</h3>
                     <p>Satisfação do cliente;<br>Melhoria contínua;<br>Respeito pelo meio ambiente e prevenção da poluição;<br>Prevenção das lesões e afeções da saúde;<br>Cumprir os requisitos legais aplicáveis às atividades da empresa;<br>Foco em resultados;<br>Confiança entre as partes;<br>Valorização e respeito pelos colaboradores;<br>Inovação.</p>
                  </div>
               </div>
            </div>
         </div>
         <img class="img-footing" src="https://i.imgur.com/ic9nTKH.jpg">
      </main>

      <script>
         var altura;
         var largura;

         function UpdateWidth() {
            largura = window.innerWidth;

            if (largura > 888) {
               $("#p-texto").css("opacity", "0");
               $("#div-azul").css("opacity", "0");
            } else {
               $("#p-texto").css("opacity", "1");
               $("#div-azul").css("opacity", "1");
            }
         }

         $(document).ready(function() {
            altura = window.innerHeight / 3;
            largura = window.innerWidth;

            if (largura > 888) {
               $("#p-texto").css("opacity", "0");
               $("#div-azul").css("opacity", "0");
            } else {
               $("#p-textos").css("opacity", "1");
               $("#div-azul").css("opacity", "1");
            }

            $(document).scroll(function() {
               var scroll = $(this).scrollTop();

               if (largura > 888) {
                  if (scroll >= altura / 3) {
                     $("#p-texto").css({"opacity" : "1", "display" : "block", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#p-texto").css({"opacity" : "0", "display" : "block", "transition" : "opacity 0.75s ease"});
                  }

                  if (scroll >= altura) {
                     $("#div-azul").css({"opacity" : "1", "display" : "flex", "transition" : "opacity 0.75s ease"});
                  } else {
                     $("#div-azul").css({"opacity" : "0", "display" : "flex", "transition" : "opacity 0.75s ease"});
                  }
               }
            });
         });

      </script>
      <?php
         include_once "includes/footer.php";
      ?>
   </body>
</html>
