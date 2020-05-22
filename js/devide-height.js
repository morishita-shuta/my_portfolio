$(function(){
  hsize = $(window).height();
  $('.main-area').css('height',hsize + 'px');
  $(window).resize(function(){
    hsize = $(window).height();
    $('.main-area').css('height',hsize + 'px');
  });
});