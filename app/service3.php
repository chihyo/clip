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
        
        
        
        <section class="event">
            <section class="toptab">
            <a href="myclip.php">내지갑</a>
            <a href="benefit_card.php">혜택</a>
            <a href="service.php" class="active">서비스</a>
            </section>
            <img src="img/event_bg.jpg" width="100%">
            <div class="eventbtn">
                <a href="#">출석체크하기</a>
            </div>
        </section>
        <div class="checkevent">
            <div>12월에 7번 출석하면 50P 즉시 지급</div>
            <div> <span style="color:#ed1c24;">8</span> / 30회</div>
        </div>
        
        
        
        
        <div class="event_foot_btn">
            <a href="service.php">
                <div class="bd2">
                    <img src="img/service_check_icon.png" alt="매장찾기">
                </div>
            </a>
            <a href="service2.php">
                <div class="bd2">
                    <img src="img/service_event_icon.png" alt="카드찾기">
                </div>
            </a>
            <a href="#">
                <div class="bd2">
                    <img src="img/service_find_icon_over.png" alt="쿠폰찾기">
                </div>
            </a>
        </div>
        
    </div>
    
  </body>
</html>