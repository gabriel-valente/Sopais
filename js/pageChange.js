$(document).ready(function() {
   $("body").css("display", "none");
   $("body").fadeIn(500);

   $("a").click(function() {
      var id = $(this).attr("id");
      if (id != "noScript") {
         event.preventDefault();

         newLocation = this.href;
         $("body").fadeOut(500, newpage);
      }

   });

   function newpage() {
      window.location = newLocation;
   }
});
