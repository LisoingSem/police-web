import AOS from 'aos';

window.onload = function () {
      AOS.init();
};

window.addEventListener('DOMContentLoaded', function () {
      window.scrollTo(0, 0);
});


$(window).on('load', function () {
      $('#loadingContent').hide();
      $('#loadedContent').show();
});