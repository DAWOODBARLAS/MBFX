$(document).ready(function () {
    $("#tradingSlider").owlCarousel({
      loop: true,
      margin: 40,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true,
        },
        600: {
          items: 2,
          nav: false,
        },
        1000: {
          items: 2,
          nav: false,
          loop: false,
        },
      },
    });
  });