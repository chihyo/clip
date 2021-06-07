<?php
  include "header.php";
?>
<script>
  $(document).ready(function() {
    $("a.back").click(function(){
      $('#leftmenuArea').animate({width:'toggle'});
      $("#bodyopacity").toggle();
    })
    $("#bodyopacity").click(function(){
      $('#leftmenuArea').css("display","none");
      $("#bodyopacity").css("display","none");
    })
  })
</script>
        <!-- header -->
        <header class="nav-down">
            <img class="header_bg" src="img/header_bg.png" alt="asd'">
            <a class="back"><img src="img/all_menu.png" alt="전체메뉴"></a>
            <a class="desc"><img src="img/mlogo.png" alt="clip2.0"></a>
            <a class="close"><img src="img/search.png" alt="닫기"></a>
        </header>
        
        <script>
            function checkevent() {
                alert("출석체크가 완료되었습니다.");
                location.href="service.php";
            }
        </script>
        
        <section class="event">
            <section class="toptab">
            <a href="myclip.php">내지갑</a>
            <a href="benefit_card.php">혜택</a>
            <a href="service.php" class="active">서비스</a>
            </section>
            <img src="img/event_bg.jpg" width="100%">
            <div class="eventbtn">
                <a onclick="checkevent()">출석체크하기</a>
            </div>
        </section>
        <div class="checkevent" style="margin-top:4%;">
            <div>진행중인 이벤트</div>
            <img src="img/event1.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/benefit1.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/event2.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/benefit2.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/event3.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/event4.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/event5.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/event6.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/benefit3.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/event7.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/benefit4.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/benefit5.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/event8.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/event9.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/event10.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <img src="img/event11.jpg" width="96%" style="border-bottom:solid 1px #ccc; padding:2%; background:#fff">
            <div style="width:100%; height:15vh;">
                
            </div>
        </div>
        
        
        <div class="event_foot_btn">
            <a href="service.php">
                <div class="bd2">
                    <img src="img/service_check_icon.png" alt="매장찾기">
                </div>
            </a>
            <a href="service2.php">
                <div class="bd2">
                    <img src="img/service_event_icon_over.png" alt="카드찾기">
                </div>
            </a>
            <a href="#">
                <div class="bd2">
                    <img src="img/service_find_icon.png" alt="쿠폰찾기">
                </div>
            </a>
        </div>
        
    </div>
    
  </body>
</html>