$(document).ready(function () {
  $("#reviews").owlCarousel({
    center: true,
    items: 1,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    responsive: {
      600: {
        items: 3,
      },
    },
  });
  $("#reviews").on("translate.owl.carousel", function (e) {
    idx = e.item.index;
    $(".owl-item.big").removeClass("big");
    $(".owl-item.medium").removeClass("medium");
    $(".owl-item").eq(idx).addClass("big");
    $(".owl-item")
      .eq(idx - 1)
      .addClass("medium");
    $(".owl-item")
      .eq(idx + 1)
      .addClass("medium");
  });

  $(window).scroll(function () {
    var linkContainer = $(".link-container");
    var banner = $(".banner");
    var limit = banner.height() + linkContainer.height() + 30;
    //console.log($(this).scrollTop(), limit);
    if ($(this).scrollTop() >= limit) {
      linkContainer.addClass("sticky");
    } else {
      linkContainer.removeClass("sticky");
    }
  });
});
