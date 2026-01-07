jQuery(document).ready(function () {
  var human_resources_swiper_testimonials = new Swiper(".testimonial-swiper-slider.mySwiper", {
    slidesPerView: 3,
      spaceBetween: 50,
      speed: 1000,
      autoplay: {
        delay: 3000,
        disableOnPoppinsaction: false,
      },
      navigation: {
        nextEl: ".testimonial-swiper-button-next",
        prevEl: ".testimonial-swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView: 2,
        },
        1023: {
          slidesPerView: 3,
        }
    },
  });
});
jQuery(document).ready(function ($) {
  var human_resources_owl = $(".team-section-grid.owl-carousel");
  human_resources_owl.owlCarousel({
    loop: true,
    items: 3,
    margin: 30,
    nav: false,
    dots: false,
    rtl: false,
    autoplay: true,
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      1439: { items:  3 }
    }
  });
});