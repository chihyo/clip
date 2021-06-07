$(document).ready(function() {

// Hide Header on on scroll down
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('header').outerHeight();
	$(window).scroll(function(event){
	 didScroll = true;
	});
	setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);
	function hasScrolled() {
    var st = $(this).scrollTop();
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
      return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
      // Scroll Down
      $('header').removeClass('nav-down').addClass('nav-up');
      $('.logo img').attr('src','img/logo2.png');
      $('.logo').css('margin-top','50px');
      $('.logo').css('background','none');
      $('.navi').css('top','90px');
      $('header').css('background','white');
      $('header').css('opacity','0.9');


    } else {
      // Scroll Up
      if(st + $(window).height() < $(document).height()) {
        $('header').removeClass('nav-up').addClass('nav-down');
        $('.logo img').attr('src','img/logo.png');
        $('.navi').css('top','80px');
        $('.logo').css('background','url(../img/back_repeat02.jpg) repeat-x');
        $('.logo').css('margin-top','0');
        $('header').css('background','url(../img/back_repeat01.jpg) repeat-x');
        $('header').css('opacity','1.0');
      }
    }
    lastScrollTop = st;
	}

      })