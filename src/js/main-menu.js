const itemsWithChildren = document.querySelectorAll('.menu-item-has-children');

itemsWithChildren.forEach(item => {
  item.addEventListener('click', () => {
    item.classList.toggle('active');
  })
})