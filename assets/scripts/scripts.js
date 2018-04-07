jQuery(document).ready(function() {
  loading();
});


function loading() {
  jQuery('.loading .progress .bar').css('opacity', '1');
  setTimeout(function () {
    jQuery('.loading .progress .bar').css('transition-delay', '0s');
    jQuery('.boot-up').addClass('booted');
    setTimeout(function () {
      jQuery('.loading p').css('display', 'none');
      setTimeout(function () {
        jQuery('.loading .progress').css('display', 'none');
        setTimeout(function () {
          jQuery('.boot-up .text registry').css('opacity', '0');
          setTimeout(function () {
            jQuery('.boot-up').css('display', 'none');
          }, 1000);
        }, 250);
      }, 100);
    }, 500);
  }, 5000);
}
