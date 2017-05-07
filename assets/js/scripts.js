// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}

//Ajax
jQuery(function($) {
  $('#true_loadmore').click(function() {
    $(this).text('Загружаю...');
    var data = {
      'action': 'loadmore',
      'query': true_posts,
      'page': current_page
    };
    $.ajax({
      url: ajaxurl,
      data: data,
      type: 'POST',
      success: function(data) {
        if (data) {
          $('#true_loadmore').text('Посмотреть больше...').before(data);
          current_page++;
          if (current_page == max_pages) $("#true_loadmore").remove();
        } else {
          $('#true_loadmore').remove();
        }
      }
    });
  });
});


$(document).ready(function() {
  var loopImgW = $('.looper').width(),
    loopImgH = loopImgW * .85,
    mainSlideH = $('header').height();

  $('.looper .img-wrap').height(loopImgH);


  var hsSlideSmallW = $('.hs_small_img').width(),
    hsSlideSmallH = hsSlideSmallW * .7,
    hsSlideBigW = $('.hs_big_img').width(),
    hsSlideBigH = hsSlideBigW * .5;

  $('.hs_small_img').height(hsSlideSmallH);
  $('.hs_big_img').height(hsSlideBigH);



  $(window).resize(function() {
    var loopImgW = $('.looper').width(),
      loopImgH = loopImgW * .85;
    $('.looper .img-wrap').height(loopImgH);


    var hsSlideSmallW = $('.hs_small_img').width(),
      hsSlideSmallH = hsSlideSmallW * .7,
      hsSlideSmallW = $('.hs_big_img').width(),
      hsSlideBigH = hsSlideBigW * .5;

    $('.hs_small_img').height(hsSlideSmallH);
    $('.hs_big_img').height(hsSlideBigH);


  })

});
