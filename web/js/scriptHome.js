

$("header").css("height", window.innerHeight); // Header Taille 

$(document).ready(function() {
    
    $("#blockLogo").css({
      position:'absolute',
      left:($(window).width() - $("#blockLogo").outerWidth()) ,
      top:($(window).height() - $("#blockLogo").outerHeight()) / 2
    });
  
});

