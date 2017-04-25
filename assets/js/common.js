$(document).ready(function() {
  //modal-video
  var $nav = $('a.video-start');
  $nav.click(function() {
    $('.modal-video').slideDown(250);
  })

  $('span.close-nav').click(function() {
    $('.modal-video').hide();
  })

  var $nav = $('a.video-start');
  $nav.click(function() {
    $('.video-window').show();
  })

  $('span.close-nav').click(function() {
    $('.video-window').slideUp();
  })

  $('a.close-video2').click(function() {
    $('.modal-video').slideUp();
  })

  // Dropdown menu
  var $nav = $('div.adaptiv-button-wrap');
  $nav.click(function() {
    $('.nav-wrap').slideToggle(300)
    $('#open').toggleClass('burg-line');
  })

  $(window).resize(function() {
    if ($(window).width() > 992) {
      $('.nav-wrap ').removeAttr('style');
    }
  })

  $('.slide-content').slick({
    dots: true,
    infinite: true,
    speed: 300,
    fade: true,
    autoplay: true,
    autoplaySpeed: 2500,
    cssEase: 'linear',
  })


  var slider = $('.bxslider').bxSlider({
    slideWidth: 5000,
    minSlides: 2,
    maxSlides: 8,
    moveSlides: 1,
    slideMargin: 10,
    pager: false,
    prevText: '',
    nextText: '',
  });

  $(".tab_content:first").addClass('current');
  $('ul#tabs_list').on('click', 'li:not(.current)', function() {
    $(this)
      .addClass('current').siblings().removeClass('current')
      .closest('div.tabs____tabs').find('div.tab_content').removeClass('current').eq($(this).index()).addClass('current');

  });
  $('#tabs_list li').click(function(e) {
    e.preventDefault();
    slider.reloadSlider();
  });



});
