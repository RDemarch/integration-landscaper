/* functions */
$(window).scroll(function () {
  if ($(window).scrollTop() > 170) {
    $('.navbar').css('background', '#333').css('transition', 'all 0.5s');
  } else {
    $('.navbar').css('background', 'transparent').css('transition', 'all 0.5s');
  }
});

/*

vanilla js version

window.onscroll = function() {
  console.log('scrolling');
};

*/
