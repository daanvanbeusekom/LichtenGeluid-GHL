(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
    
   document.addEventListener("DOMContentLoaded", function(){
     $('.preloader-background').delay(1000).fadeOut('slow');

     $('.preloader-wrapper')
        .delay(17000)
        .fadeOut();
    });
    
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
})(jQuery); // end of jQuery name space