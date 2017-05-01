$(document).ready(function() {
  $('.fotorama').fotorama({
    width: '100%',
    //maxwidth: '100%',
    ratio: 16/9,
    nav: 'thumbs',
    swipe: true,
    loop: true,
    transition: "crossfade",
    thumbmargin: 20,
    navwidth: '78%',
    thumbwidth: 144,
    thumbheigh: 96,
    //fit: 'cover',
    autoplay: 5000,
    allowfullscreen: true,
  });

});
