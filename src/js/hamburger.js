document.addEventListener('DOMContentLoaded', function () {
  const hamburger = document.getElementById('js-hamburger');
  const mainNav = document.getElementById('js-main-nav');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mainNav.classList.toggle('active');
  });
});