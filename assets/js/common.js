jQuery(document).ready(function() {
  //modal-video
  // var $nav = jQuery('a.video-start');
  // $nav.click(function() {
  //   jQuery('.modal-video').slideDown(250);
  // })

  // jQuery('span.close-nav').click(function() {
  //   jQuery('.modal-video').hide();
  // })

  // var $nav = jQuery('a.video-start');
  // $nav.click(function() {
  //   jQuery('.video-window').show();
  // })

  // jQuery('span.close-nav').click(function() {
  //   jQuery('.video-window').slideUp();
  // })

  // jQuery('a.close-video2').click(function() {
  //   jQuery('.modal-video').slideUp();
  // })

  // Dropdown menu
  var $nav = jQuery('div.adaptiv-button-wrap');
  $nav.click(function() {
    jQuery('.nav-wrap').slideToggle(300)
    jQuery('#open').toggleClass('burg-line');
  })

  jQuery(window).resize(function() {
    if (jQuery(window).width() > 992) {
      jQuery('.nav-wrap ').removeAttr('style');
    }
  })

  jQuery('.slide-content').slick({
    dots: true,
    infinite: true,
    speed: 300,
    fade: true,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 5000,
    cssEase: 'linear',
  })


  var slider = jQuery('.bxslider').bxSlider({
    slideWidth: 5000,
    minSlides: 2,
    maxSlides: 8,
    moveSlides: 1,
    slideMargin: 10,
    pager: false,
    touchEnabled: true,
    prevText: '',
    nextText: '',
  });

  // jQuery('.bxpost-gallery').bxSlider({
  //   mode: 'fade',
  //   touchEnabled: true,
  //   controls: false,
  //   //adaptiveHeight: true,
  //   pagerCustom: '#bx-pager',
  //   speed: 300,
  //   autoplay: true,
  //   autoplaySpeed: 5000,
  // });

  // jQuery('#bx-pager').bxSlider({
  //   slideWidth: 5000,
  //   minSlides: 3,
  //   maxSlides: 3,
  //   moveSlides: 1,
  //   slideMargin: 40,
  //   pager: false,
  //   touchEnabled: true,
  //   //adaptiveHeight: true,
  //   prevText: '',
  //   nextText: '',
  //   speed: 300,
  //   autoplay: true,
  //   autoplaySpeed: 5000,
  // });




  jQuery(".tab_content:first").addClass('current');
  jQuery('ul#tabs_list').on('click', 'li:not(.current)', function() {
    jQuery(this)
      .addClass('current').siblings().removeClass('current')
      .closest('div.tabs____tabs').find('div.tab_content').removeClass('current').eq(jQuery(this).index()).addClass('current');

  });
  // jQuery('#tabs_list li').click(function(e) {
  //   e.preventDefault();
  //   slider.reloadSlider();
  // });




  var sync1 = jQuery("#sync1");
  var sync2 = jQuery("#sync2");
  var slidesPerPage = 3; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    lazyLoad: true,
    items: 1,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    slideSpeed: 5000,
    nav: true,
    //autoplay: true,
    margin: 40,
    dots: false,
    loop: true,
    //responsiveRefreshRate: 200,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function() {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
      lazyLoad: true,
      items: slidesPerPage,
      margin: 40,
      dots: false,
      //nav: false,
      smartSpeed: 200,
      slideSpeed: 500,
      //slideBy: slidesPerPage,
      responsiveRefreshRate: 100
    }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;

    //if you disable loop you have to comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - (el.item.count / 2) - .5);

    if (current < 0) {
      current = count;
    }
    if (current > count)  {
      current = 0;
    }

    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();

    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }

  sync2.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = jQuery(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });

  var postSlideW = $('.rama-wrap').width(),
    postSlideH = postSlideW * .6;


  $('#sync1').height(postSlideH);
  $('#sync1 .owl-item').height(postSlideH);
  $(window).resize(function() {
    var postSlideW = $('.rama-wrap').width(),
      postSlideH = postSlideW * .6;


    $('#sync1').height(postSlideH);
    $('#sync1 .owl-item').height(postSlideH);
  })
});
