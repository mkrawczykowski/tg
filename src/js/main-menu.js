document.addEventListener('DOMContentLoaded', function () {
  const itemsWithChildren = document.querySelectorAll('.main-nav__nav > .menu-item-has-children');
  const submenuFeaturedImage = document.querySelectorAll('.featured-image__menu-submenus > .featured-image__menu-submenu');



  itemsWithChildren.forEach((itemWithChildren, itemWithChildrenIndex) => {
    itemWithChildren.addEventListener('click', (event) => {
      event.preventDefault();
      // itemWithChildren.classList.toggle('active');
      console.log(`index: ${itemWithChildrenIndex}`);

      submenuFeaturedImage.forEach((itemSubmenuFeaturedImage, itemSubmenuFeaturedImageIndex) => {
        if (itemWithChildrenIndex === itemSubmenuFeaturedImageIndex) {
          itemSubmenuFeaturedImage.classList.toggle('active');
        }
        if (itemWithChildrenIndex !== itemSubmenuFeaturedImageIndex) {
          itemSubmenuFeaturedImage.classList.remove('active');
        }
      });
    })
  })
});