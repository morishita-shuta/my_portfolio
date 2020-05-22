$(function() {
  const workAreaNav = ".js-work-area__slider-nav"

  $('.js-work-area__wrapper').slick({
    appendDots: $(workAreaNav),
    dots: true,
    arrows: false,
  });
});