// script.js

$(function() {
  $(".pbutton").hover(function() {
    $(this).removeClass('btn btn-primary').addClass('btn btn-success').html('<i class="fas fa-chevron-circle-down"></i>');

  },
    function(){
      $(this).text('Projects').removeClass('btn btn-success').addClass('btn btn-primary');
    });





});
