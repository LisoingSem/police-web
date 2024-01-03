import './bootstrap';
import jQuery from 'jquery';
window.$ = jQuery;

import '@fortawesome/fontawesome-free/css/all.min.css';

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
window.Swiper = Swiper;


document.addEventListener('DOMContentLoaded', function () {
      var btnBackTop = document.querySelector('.backToTopBtn');

      window.onscroll = function () {
            var windowHeight = '120';
            var documentHeight = document.documentElement.scrollHeight;
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > windowHeight) {
                  btnBackTop.style.display = 'flex';
            } else {
                  btnBackTop.style.display = 'none';
            }
      };

      btnBackTop.addEventListener('click', function () {
            scrollToTop(200);
      });
});


function scrollToTop(duration) {
      var start = window.pageYOffset;
      var startTime = null;
      var distance = start;
      var increment = 1000;
      var currentTime;

      function scrollStep(timestamp) {
            if (!startTime) {
                  startTime = timestamp;
            }

            currentTime = timestamp - startTime;
            var progress = currentTime / duration;

            var easeInOutQuad = function (t) {
                  return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
            };

            var scrollY = start - distance * easeInOutQuad(progress);

            window.scrollTo(0, scrollY);

            if (currentTime < duration) {
                  window.requestAnimationFrame(scrollStep);
            }
      }
      window.requestAnimationFrame(scrollStep);
}
