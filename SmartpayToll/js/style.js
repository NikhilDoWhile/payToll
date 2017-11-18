$(document).ready(function(){
  $(function(){
 var shrinkHeader = 130;
  $(window).scroll(function() {
  var scroll = getCurrentScroll();
    if ( scroll >= shrinkHeader ) {
      $('.boxed-nav').css("padding-top",'0');
       $('#navbar.boxed').css("width",'100%');
       $('nav#navbar').addClass('fixed-top');
       $('#navbar.boxed .nav-item .nav-link').css('padding','1rem 2rem')
    }
    else {
      $('.boxed-nav').css("padding-top",'50px');
       $('#navbar.boxed').css("width",'70%');
       $('nav#navbar').removeClass('fixed-top');
       $('#navbar.boxed .nav-item .nav-link').css('padding','1.5rem 3rem')
    }
  });
          function getCurrentScroll() {
  return window.pageYOffset || document.documentElement.scrollTop;
  }
});
});