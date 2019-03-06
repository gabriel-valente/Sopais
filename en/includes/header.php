<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../css/header.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type="text/javascript" src="../js/pageChange.js"></script>
</head>
<header>
   <a href="home.php">
      <img src="../img/logo.png">
   </a>
   <p class="desktop name"><b>SOPAIS -</b><i> Componentes Metálicos Lda.</i></p>
      <div class="mobile icon" id="nav-icon">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
      </div>
   <div class="mobile div-social">
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
   <nav>
      <a class="item" href="home.php">Home</a>
      <a class="item" href="company.php">The Company</a>
      <a class="item" href="whatwedo.php">What We Do</a>
      <a class="item" href="quality.php">Quality</a>
      <a class="item" href="news.php">News</a>
      <a class="item" href="contacts.php">Contacts</a>

      <div class="mobile language">
         <a class="itemLang langSel" href="../pt/inicio.php">PT</a>
         <a class="itemLang" href="../en/home.php">EN</a>
      </div>
   </nav>
   <div class="desktop lang">
      <a href="../pt/inicio.php">PT</a>
      <a href="../en/home.php">EN</a>
   </div>
</header>
<script>

$(document).ready(function(){
   $(window).on("scroll", function () {
      if ($(this).scrollTop() > 0) {
         $("header").addClass("minimize");
      }
      else {
         $("header").removeClass("minimize");
      }
   });

	$("#nav-icon").click(function(){
      $(this).toggleClass("open");
		$("nav").toggleClass("responsive");
	});
});
</script>
