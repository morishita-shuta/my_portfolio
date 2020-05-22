const speed = 400;
const offset = 110;

$(function() {
  $(document).on('click', 'a[href^="#"]', function() {
    console.log("a");
    const href = $(this).attr('href');
    const $target = $(href);
    const position = $target.offset().top - offset;

    $('body,html').animate({ scrollTop: position }, speed, 'swing');

    return false;
  });
});