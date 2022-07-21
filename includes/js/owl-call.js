// Portfolio Carousel

jQuery(document).ready(function () {
  jQuery("#portfolio-carousel").owlCarousel({
    lazyLoad: true,
    loop: true,
    margin: 25,
    stagePadding: 10,
    items: 1,
    center: true,
    dots: true,
    dotsEach: 3,
    autoplay: true,
    nav: true,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    autoWidth: false,
    center: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    navText: [jQuery('.am-prev'), jQuery('.am-next')],
    onInitialized: function(event){
      let element = jQuery(event.target);
      element.find('.owl-dots').addClass('dot-white');
    },
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      }
    },
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
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        center: false,
        nav: false,
        dots: false
      },
      600: {
        items: 2,
        center: false,
      },
      1000: {
        items: 3,
      },
      1800: {
        items: 3,
      }
    },
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
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
      1800: {
        items: 3,
      }
    },
  });
});

// Services Carousal

jQuery(document).ready(function () {
  jQuery("#services-carousel").owlCarousel({
    lazyLoad: true,
    loop: true,
    margin: 65,
    dots: true,
    dotsEach: 3,
    autoplay: true,
    nav: true,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    stagePadding: 35,
    navText: [jQuery('.prev-btn-serv'), jQuery('.next-btn-serv')],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
        margin: 45,
      },
      600: {
        items: 2,
        margin: 45,
      },
      1000: {
        items: 3,
      }
    },
  });
});

// Services Carousal Dark BG

jQuery(document).ready(function () {
  jQuery("#services-carousel-dark").owlCarousel({
    lazyLoad: true,
    loop: true,
    margin: 65,
    dots: true,
    dotsEach: 3,
    autoplay: true,
    nav: true,
    autoplaySpeed: 2500,
    slideTransition: 'ease',
    stagePadding: 35,
    navText: [jQuery('.prev-btn-serv-dark'), jQuery('.next-btn-serv-dark')],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
        margin: 45,
      },
      600: {
        items: 2,
        margin: 45,
      },
      1000: {
        items: 3,
      }
    },
  });
});

// Featured Products Carousal Dark BG

jQuery(document).ready(function () {
  jQuery("#feat-prods-carousel").owlCarousel({
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
        nav: false,
        margin: 45,
      },
      600: {
        items: 2,
        margin: 45,
      },
      1000: {
        items: 4,
      }
    },
  });
});

// Featured Products Carousal Mobile Dev

jQuery(document).ready(function () {
  jQuery(".feat-prod-carousel").owlCarousel({
    loop: true,
    margin: 12,
    nav: false,
    dots: false,
    items: 1,
    autoplay: true,
    stagePadding: 10,
    center: true
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
        nav: false
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
