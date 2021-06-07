<?php
session_start();
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CLIP</title>
    <meta name="viewport" content="width=320px, initial-scale=1.0, user-scalable=no">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="shortcut icon" href="./img/meta_logo.png" />
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/comm.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script type="text/javascript" src="js/lib.js"></script>
    <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="js/jquery.bxslider.css" rel="stylesheet" />
    <script type="text/javascript" src="js/tab.js" /></script>
  </head>


<script type="text/javascript">
$(document).ready(function() {

// Hide Header on on scroll down
	var didScroll;
	var lastScrollTop = 0;
	var delta = 1;
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


    } else {
      // Scroll Up
      if(st + $(window).height() < $(document).height()) {
        $('header').removeClass('nav-up').addClass('nav-down');
      }
    }
    lastScrollTop = st;
	}

      })
</script>

<script>
$(document).ready(function(){
    $('.visual-slider').bxSlider({
    slideMargin: 0,
    auto: true,
    nextSelector: '#slider-next',
    prevSelector: '#slider-prev',
    nextText: 'Onward →',
    prevText: '← Go back',
    pause:6000
    });
});
</script>
  <body>
    <div id="web_container">
      
      
      
      <div id="leftmenuArea">
        <div class="top_fix">
        <div class="profile">
          <span class="profileimg">asd</span>
          <span class="intro">
          <?php
            echo $_SESSION["userName"];
          ?>
          님 환영합니다.
          </span>
          <a href="myclip.php"><img src="img/ihome.png" width="100%"></a>
        </div>
        <div class="clippoint">
          <div>클립 포인트</div>
          <div>500 p</div>
        </div>
        <div class="quick_btn">
          <a href="recipt.php"><div class="giftyshow"><img src="img/left_recipt.png"></div></a>
          <a href="mystamp.php"><div class="left_mystamp"><img src="img/left_mystamp.png"></div></a>
          <a href="gifty_show.php"><div class="smartrecipt"><img src="img/left_giftyshow.png"></div></a>
        </div>
        </div>
        <div class="bottom">
        <h2>혜택 서비스</h2>
        <a href="benefit_store.php">
          <img src="img/left_1.png">
        </a>
        <a href="benefit_card.php">
          <img src="img/left_2.png">
        </a>
        <a href="benefit_coupon.php">
          <img src="img/left_3.png">
        </a>
        <a href="#">
          <img src="img/left_4.png">
        </a>
        <a href="#">
          <img style="border-bottom:solid 1px #ccc" src="img/left_5.png">
        </a>
        <h2>CLiP 설정</h2>
        <a href="#">
          <img src="img/left_6.png">
        </a>
        <a href="#">
          <img src="img/left_7.png">
        </a>
        <a href="#">
          <img src="img/left_8.png">
        </a>
        <a href="#">
          <img src="img/left_9.png">
        </a>
        <a href="#">
          <img src="img/left_10.png">
        </a>
        <a href="#">
          <img src="img/left_11.png">
        </a>
        <div style="border-top:solid 1px #ccc; padding:5% 4%;">
          <div style="float:left;">앱 버전 정보</div>
          <div style="float:right;">06.00.40</div>
        </div>
        </div>
      </div>
      <div id="bodyopacity">
        <span style="float:right;margin-right:30px;font-size:4em;color:#fff;">x</span>
      </div>
        

