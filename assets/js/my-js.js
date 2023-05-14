jQuery(document).ready(function () {
  jQuery(".owl-carousel").owlCarousel({
    loop: true,
    items: 5,
    margin: 10,
    stagePadding: 10,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 3000,
    nav: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 3,
        nav: false,
      },
      1000: {
        items: 3,
        nav: true,
        loop: false,
      },
    },
  });
});

jQuery(document).ready(function ($) {
  $('a[href^="#"]').on("click", function (event) {
    var target = $(this.getAttribute("href"));
    if (target.length) {
      event.preventDefault();
      $("html, body").stop().animate(
        {
          scrollTop: target.offset().top,
        },
        10000
      );
    }
  });
});
