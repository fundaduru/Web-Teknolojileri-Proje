(function ($) {
  "use strict";


  $('.js-input').keyup(function () {
    if ($(this).val()) {
      $(this).addClass('not-empty');
    } else {
      $(this).removeClass('not-empty');
    }
  });
  
  $('.js-scroll-trigger').click(function () {
    $('.navbar-collapse').collapse('hide');
  });

  
  $('body').scrollspy({
    target: '#sideNav'
  });

})(jQuery);
