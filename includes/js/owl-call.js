// Portfolio Carousel

jQuery(document).ready(function () {
  jQuery("#portfolio-carousel").owlCarousel({
    lazyLoad: true,
    loop: true,
    margin: 17,
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
    dotsEach: 5,
    autoplay: true,
    nav: true,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    stagePadding: 35,
    navText: [jQuery('.prev-btn'), jQuery('.next-btn')],
    responsive: false,
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
    stagePadding: 35,
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
    stagePadding: 35,
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
    stagePadding: 35,
    navText: [jQuery('.prev-btn-serv-dark'), jQuery('.next-btn-serv-dark')],
  });
});

// Featured Products Carousal Dark BG

jQuery(document).ready(function () {
  jQuery(".feat-prod-carousel").owlCarousel({
    loop: true,
    margin: 5,
    autoplay: true,
    nav: true,
    dots: false,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    navText: [jQuery('.prev-btn-feat-prod'), jQuery('.next-btn-feat-prod')],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 3,
      },
      1800: {
        items: 4,
      }
    },
  });
});

// Featured Products Carousal Mobile Dev

jQuery(document).ready(function () {
  jQuery("#feat-prods-mb-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots:false,
    items: 1,
    autoplay:true,
    stagePadding:10,
    center:true
  });
});

// Products Carousel

jQuery(document).ready(function () {
  jQuery("#products-carousel").owlCarousel({
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
    stagePadding: 35,
    navText: [jQuery('.prev-btn-prod'), jQuery('.next-btn-prod')],
  });
});


jQuery(document).ready(function () {
  jQuery("#clients-carousel").owlCarousel({
    lazyLoad: true,
    loop: true,
    center: true,
    dots: true,
    dotsEach: false,
    autoplay: true,
    nav: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 3000,
    slideTransition: 'linear',
    navText: [jQuery('.prev-btn-clients'), jQuery('.next-btn-clients')],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      }
    },
  });
});
