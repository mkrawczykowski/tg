import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';

document.addEventListener('DOMContentLoaded', () => {
  Swiper.use([Pagination]);
  const swiper = new Swiper('.swiper', {
    pagination: {
      el: '.swiper-pagination',
      autoplay: {
        delay: 5000,
      },
    },
  });
})
