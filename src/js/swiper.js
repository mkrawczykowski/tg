import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';
// import 'swiper/css/navigation';
import 'swiper/css/pagination';
document.addEventListener('DOMContentLoaded', () => {
  Swiper.use([Pagination]);
  const swiper = new Swiper('.swiper', {
    pagination: {
      el: '.swiper-pagination'
    },
  });
  console.log(swiper);

  const sp = document.querySelector('.swiper .swiper-pagination');
  console.log('sp');
  console.log(sp);
})
