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
            <a href="benefit_card.php" class="active">혜택</a>
            <a href="service.php">서비스</a>
            </section>
            <div>
                <div class="benefit">
                    <div class="store tabs">
                    <ul class="tab-title">
                        <li class="active bd"><a href="#mtab1">추천매장</a></li>
                        <li class="bd"><a href="#mtab2">브랜드별</a></li>
                    </ul>
                    <div class="tab-cont">
                        <div id="mtab1" class="mtab1">
                            준비중입니다.
                        </div>
                        <div id="mtab2" class="mtab2 hidden">
                            준비중입니다.
                        </div>
                    </div>
            </div>
                </div>
            </div>
            
            
        </section>
        
        <section class="title">
            
        </section>
        
        <div class="benefit_foot_btn">
            <a href="benefit_store.php">
                <div class="bd2">
                    <img src="img/search_store.png" alt="매장찾기">
                </div>
            </a>
            <a href="benefit_card.php">
                <div class="bd2">
                    <img src="img/search_card.png" alt="카드찾기">
                </div>
            </a>
            <a href="benefit_coupon.php">
                <div class="bd2">
                    <img src="img/search_coupon.png" alt="쿠폰찾기">
                </div>
            </a>
            <a href="gifty_show.php">
                <div>
                    <img src="img/gifty_show_click.png" alt="기프티쇼">
                </div>
            </a>
        </div>
    </div>
    
  </body>
</html>