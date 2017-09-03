import 'jquery';
import 'bootstrap/dist/js/bootstrap';

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

$('.form-control').focus( function() {

  $(this).prev('.form-label').addClass('float');

}).blur( function() {

    if ($(this).val() == '' ) {

       $(this).prev('.form-label').removeClass('float');

    }

});

$('#submit').on('click', function(e) {

  e.preventDefault();

  $('.form-control').each( function() {

    $(this).removeClass('error');

    if ( $(this).val() == '' ) {

      $(this).addClass('error');

    } else {

      var data = {
        'name': $('#name').val(),
        'email': $('#email').val(),
        'subject': $('#subject').val(),
        'description': $('#description').val()
      };

      $.ajax({
        url: '../../..//wp-content/plugins/form-validate.php',
        type: 'post',
        data: data,
        dataType: 'json',
        success: function(data) {

          $('.pre-form').css('display', 'none');
          $('.thanks').css('display', 'block');
          $('.thanks-name').text(data.name);
        }
      });
      return false;
    }

  });



});

