// Portfolio Carousel

jQuery(document).ready(function () {
  jQuery("#portfolio-carousel").owlCarousel({
    lazyLoad: true,
    loop: true,
    margin: 10,
    items: 1,
    center: true,
    dots: true,
    dotsEach: 3,
    autoplay: true,
    nav: true,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    autoWidth: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    navText: [jQuery('.am-prev'), jQuery('.am-next')],
  });
});

// Promotions Carousal

jQuery(document).ready(function () {
  jQuery("#promotions-carousel").owlCarousel({
    lazyLoad: true,
    loop: true,
    margin: 65,
    items: 3,
    center: true,
    dots: true,
    dotsEach: 3,
    autoplay: true,
    nav: true,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    stagePadding:35,
    navText: [jQuery('.prev-btn'), jQuery('.next-btn')],
  });
});

// Promotions Carousal Light BG

jQuery(document).ready(function () {
  jQuery("#promotions-carousel-light").owlCarousel({
    lazyLoad: true,
    loop: true,
    margin: 65,
    items: 3,
    center: true,
    dots: true,
    dotsEach: 3,
    autoplay: true,
    nav: true,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    stagePadding:35,
    navText: [jQuery('.prev-btn-light'), jQuery('.next-btn-light')],
  });
});

// Services Carousal

jQuery(document).ready(function () {
  jQuery("#services-carousel").owlCarousel({
    lazyLoad: true,
    loop: true,
    margin: 65,
    items: 3,
    center: true,
    dots: true,
    dotsEach: 3,
    autoplay: true,
    nav: true,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    stagePadding:35,
    navText: [jQuery('.prev-btn-serv'), jQuery('.next-btn-serv')],
  });
});

// Services Carousal Dark BG

jQuery(document).ready(function () {
  jQuery("#services-carousel-dark").owlCarousel({
    lazyLoad: true,
    loop: true,
    margin: 65,
    items: 3,
    center: true,
    dots: true,
    dotsEach: 3,
    autoplay: true,
    nav: true,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    stagePadding:35,
    navText: [jQuery('.prev-btn-serv-dark'), jQuery('.next-btn-serv-dark')],
  });
});

// Featured Products Carousal Dark BG

jQuery(document).ready(function () {
  jQuery("#feat-prods-carousel").owlCarousel({
    loop: true,
    margin: 65,
    items: 4,
    center: true,
    dots: true,
    autoplay: true,
    nav: true,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    stagePadding:35,
    navText: [jQuery('.prev-btn-feat-prod-dark'), jQuery('.next-btn-feat-prod-dark')],
  });
});
