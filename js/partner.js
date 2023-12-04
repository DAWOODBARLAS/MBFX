$(document).ready(function () {
  AOS.init();

  $("#partnerSlider").owlCarousel({
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
        items: 1,

        nav: false,
      },

      1000: {
        items: 2,

        nav: true,

        loop: false,
      },
    },
  });
});
