<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CLIP</title>
    <meta name="viewport" content="width=1200px;">
    <link rel="shortcut icon" href="./img/meta_logo.png" />
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/comm.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <script type="text/javascript" src="js/lib.js"></script>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!--<script src="js/header_scroll.js"></script>-->

    <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="./js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="./js/jquery.bxslider.css" rel="stylesheet" />
    <script>
      $(document).scroll(function(e) {
        var value = $(this).scrollTop();
        if (value > 10) {
            $('header').removeClass('nav-down').addClass('nav-up');
            $('.logo img').attr('src','img/logo2.png');
            $('.logo').css('margin-top','45px');
            $('.logo').css('background','none');
            $('.navi').css('top','90px');
            $('header').css('background','white');
         }
        else {
            $('header').removeClass('nav-up').addClass('nav-down');
            $('.logo img').attr('src','img/logo.png');
            $('.navi').css('top','80px');
            $('.logo').css('background','url(../img/back_repeat02.jpg) repeat-x');
            $('.logo').css('margin-top','0');
            $('header').css('background','url(../img/back_repeat01.jpg) repeat-x');
         }
    })

      // $(document).ready(function() {
      // // Hide Header on on scroll down
      // // 	var didScroll;
      // // 	var lastScrollTop = 0;
      // // 	var delta = 0;
      // // 	var navbarHeight = $('header').outerHeight();
      // // 	$(window).scroll(function(event){
      // // 	 didScroll = true;
      // // 	});
      // // 	setInterval(function() {
      // //     if (didScroll) {
      // //       hasScrolled();
      // //       didScroll = false;
      // //     }
      // //   }, 250);
      // // 	function hasScrolled() {
      // //     var st = $(this).scrollTop();
      // //     // Make sure they scroll more than delta
      // //     if(Math.abs(lastScrollTop - st) <= delta)
      // //       return;

      // //     // If they scrolled down and are past the navbar, add class .nav-up.
      // //     // This is necessary so you never see what is "behind" the navbar.
      // //     if (st > lastScrollTop && st > navbarHeight){
      // //       // Scroll Down
      // //       $('header').removeClass('nav-down').addClass('nav-up');
      // //       $('.logo img').attr('src','img/logo2.png');
      // //       $('.logo').css('margin-top','45px');
      // //       $('.logo').css('background','none');
      // //       $('.navi').css('top','90px');
      // //       $('header').css('background','white');


      // //     } else {
      // //       // Scroll Up
      // //       if(st + $(window).height() < $(document).height()) {
      // //         $('header').removeClass('nav-up').addClass('nav-down');
      // //         $('.logo img').attr('src','img/logo.png');
      // //         $('.navi').css('top','80px');
      // //         $('.logo').css('background','url(../img/back_repeat02.jpg) repeat-x');
      // //         $('.logo').css('margin-top','0');
      // //         $('header').css('background','url(../img/back_repeat01.jpg) repeat-x');
      // //       }
      // //     }
      // //     lastScrollTop = st;
      // // 	}
      // })
    </script>
    <script type="text/javascript" src="js/tab.js" /></script>
  </head>
  <body>

<!-- header -->
    <header class="nav-down">
      <h1 class="hidden">header</h1>
      <div class="logo"><a href="index.php"><img src="img/logo.png" alt="CLiP 2.0 logo"/></a></div>
      <nav class="util_menu">
      <?php
        if(isset($_SESSION['userId'])) {
      ?>
        <ul>
          <li><a href="database/outlet.php?outlet=memberlogout">????????????</a></li>
          <li><a href="sub6_myclip.php">????????????</a></li>
          <li><a href="cs.php">????????????</a></li>
        </ul>
      <?php
        }else {
      ?>
        <ul>
          <li><a href="login.php">?????????</a></li>
          <li><a href="join.php">????????????</a></li>
          <li><a href="cs.php">????????????</a></li>
        </ul>
      <?php
        }
      ?>
      </nav>
      <nav class="navi">
        <div class="line">
          <ul class="left">
            <li>
              <a href="sub1_usedclip.php">????????????</a>
              <ul class="submenu">
                <li><a href="sub1_usedclip.php">???????????????</a></li>
                <li><a href="sub1_media.php">????????????</a></li>
                <li><a href="https://play.google.com/store/apps/details?id=com.kt.android.showtouch">????????????</a></li>
              </ul>
            </li>
            <li>
              <a href="sub2_inquiry.php">????????????</a>
              <a><ul class="submenu">
                <li><a href="sub2_inquiry.php">??????????????????</a></li>
                <li><a href="sub2_inquirycheck.php">??????????????????</a></li>
              </ul></a>
            </li>
            <li>
              <a href="sub3_event.php">?????????</a>
              <ul class="submenu">
                <li><a href="sub3_event.php">??????????????????</a></li>
                <li><a href="#">???????????????</a></li>
              </ul>
            </li>
          </ul>
          <ul class="right">
            <li>
              <a href="sub6_myclip.php">????????????</a>
            </li>
            <li>
              <a href="sub5_membershipcard.php">??????</a>
              <ul class="submenu">
                <li><a href="sub5_membershipcard.php">?????? ?????? ??????</a></li>
                <li><a href="sub5_store.php">?????? ?????? ??????</a></li>
                <li><a href="#">???</a></li>
              </ul>
            </li>
            <li>
              <a href="#">???????????????</a>
              <ul class="submenu">
                <li><a href="#">?????????????????????</a></li>
                <li><a href="#">??????????????????</a></li>
                <li><a href="#">???</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>