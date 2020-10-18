import 'alpinejs';
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/swiper-bundle.css';

Swiper.use([Navigation, Pagination, Autoplay]);

const fnList = [];

const onLoaded = (fn) => fnList.push(fn);

document.addEventListener('DOMContentLoaded', () => fnList.forEach(fn => fn()));

onLoaded(() => {
  new Swiper('#hero-slider', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
    },
    autoplay: {
      delay: 4000,
    }
  });

  new Swiper('#testimonio-slider', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
      delay: 4000,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
    }
  });
});

// Menu
onLoaded(() => {
  const $btnToggleMenu = document.getElementById('btnToggleMenu');
  const $menu = document.getElementById('menu');

  $btnToggleMenu.addEventListener('click', () => {
    $menu.classList.toggle('hidden');
    $menu.classList.toggle('flex');
  });
});
