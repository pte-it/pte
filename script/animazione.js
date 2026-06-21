$(document).ready (function(){
alert(screen.width);
var traslazione = screen.width - 300;
alert (traslazione);
  
   $('#hovercraft a:first').animate({paddingLeft:'+=550'},8000);
   $('#hovercraft a:first').animate({paddingLeft:'-=550'},20);
  
   });
 