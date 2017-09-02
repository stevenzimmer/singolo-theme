import 'jquery';
import 'bootstrap/dist/js/bootstrap';
import '../node_modules/waypoints/lib/noframework.waypoints';

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  // Remove placeholder text on focus

  $('input,textarea').focus(function(){
    $(this).data('placeholder',$(this).attr('placeholder'))
          .attr('placeholder','');
    }).blur(function(){
      $(this).attr('placeholder',$(this).data('placeholder'));
  });
});

console.log( $('h1').text('text again') );