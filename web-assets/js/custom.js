$(function () {
  AOS.init();
  window.addEventListener("load", AOS.refresh);
  $(window).on("scroll", function () {
    $(function () {
      if ($(".stricky").length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
          $(".stricky").addClass("stricky-fixed");
          $(".scroll-to-top").fadeIn(1500);
        } else if ($(this).scrollTop() <= strickyScrollPos) {
          $(".stricky").removeClass("stricky-fixed");
          $(".scroll-to-top").fadeOut(1500);
        }
      }
    });
  });
});

var swiper = new Swiper(".news_slider_one", {
  spaceBetween: 10,
  //   centeredSlides: true,
  slidesPerView: 4,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".news_slider_one_next",
    prevEl: ".news_slider_one_prev",
  },
});
