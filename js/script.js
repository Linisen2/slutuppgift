// Mobile Nav
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

// Slider
$(document).on('ready', function() {

      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      });
