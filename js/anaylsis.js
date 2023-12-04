$(document).ready(function () {
  $("#sessions").owlCarousel({
    nav: true,
    center: true,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
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
    },
  });
  $("#techinical-analysis").owlCarousel({
    nav: true,
    center: true,
    items: 1,
    loop: true,
    margin: 10,
    responsive: {
      600: {
        items: 3,
      },
    },
  });
});
