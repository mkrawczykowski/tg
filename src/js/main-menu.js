document.addEventListener('DOMContentLoaded', function () {
  const itemsWithChildren = document.querySelectorAll('.main-nav__nav > .menu-item-has-children');
  const submenuFeaturedImage = document.querySelectorAll('.featured-image__menu-submenus > .featured-image__menu-submenu');
  const subMenusContainer = document.querySelector('.featured-image__menu-submenus');

  itemsWithChildren.forEach((itemWithChildren, itemWithChildrenIndex) => {
    itemWithChildren.addEventListener('click', (event) => {
      submenuFeaturedImage.forEach((itemSubmenuFeaturedImage, itemSubmenuFeaturedImageIndex) => {
        if (itemWithChildrenIndex === itemSubmenuFeaturedImageIndex) {
          itemSubmenuFeaturedImage.classList.toggle('active');
          const isAnyActiveSubmenu = document.querySelectorAll('.featured-image__menu-submenus > .featured-image__menu-submenu.active');
          if (isAnyActiveSubmenu.length) {
            subMenusContainer.classList.add('active');
          }
          if (!isAnyActiveSubmenu.length) {
            subMenusContainer.classList.remove('active');
          }
        }
        if (itemWithChildrenIndex !== itemSubmenuFeaturedImageIndex) {
          itemSubmenuFeaturedImage.classList.remove('active');
        }
      });
    })
  })
});