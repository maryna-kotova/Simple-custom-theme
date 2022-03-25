const slider = document.querySelector('.carousel-item');

slider.classList.add("active");

//Menu burger

const iconMenu = document.querySelector('.mk-menu-icon-box');
if (iconMenu) {
    const menuBody = document.querySelector('.mk-header-menu');
    iconMenu.addEventListener(("click"), function () {
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');
    })
}


