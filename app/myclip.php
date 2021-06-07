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
            <a href="myclip.php" class="active">내지갑</a>
            <a href="benefit_card.php">혜택</a>
            <a href="service.php">서비스</a>
            </section>
            <div class="visual-slider">
                <a href="service2.php"><div class="event1"></div></a>
                <a href="service2.php"><div class="event2"></div></a>
                <a href="service2.php"><div class="event3"></div></a>
                <a href="service2.php"><div class="event4"></div></a>
            </div>
        </section>
        
        <div class="wallet tabs">
            <ul class="tab-title">
                <li class="active bd"><a href="#ntab1">내 카드</a></li>
                <li class="bd"><a href="#ntab2">쿠폰·기프티</a></li>
                <li><a href="#ntab3">내 매장</a></li>
            </ul>
            <div class="tab-cont">
                <div id="ntab1" class="ntab1">
                  <?php
                    include "sub6_myclip_con.php";
                  ?>
                  <br><br><br><br><br>
                </div></a>
                <div id="ntab2" class="ntab2 hidden">
                  <h2>쿠폰</h2>
                  <h3>0개</h4>
                  <div class="con">
                      발급받은 내역이 없습니다.
                  </div>
                  <a href="benefit_coupon.php">쿠폰 혜택 바로가기</a>
                  
                  <img class="bg" src="img/coupon_bg.png" width=100% >
                  
                  <h2>기프티</h2>
                  <h3>0개</h4>
                  <div class="con">
                      발급받은 내역이 없습니다.
                  </div>
                  <a href="#">기프티 쇼 바로가기</a>
                  <br><br><br><br><br><br>
                </div>
                
                <div id="ntab3" class="ntab3 hidden">
                  <p>준비중입니다.</p>
                  
                </div>
            </div>
        </div>
        
        <div class="foot_btn">
            <a href="recipt.php">
                <div class="bd2">
                    <img src="img/icon_1.png" alt="스마트영수증">
                    <p>스마트영수증</p>
                </div>
            </a>
            <a href="mystamp.php">
                <div class="bd2">
                    <img src="img/icon_2.png" alt="내스탬프">
                    <p>내스탬프</p>
                </div>
            </a>
            <a href="clippoint.php">
                <div>
                    <img src="img/icon_3.png" alt="클립포인트">
                    <p>클립포인트</p>
                </div>
            </a>
        </div>
        <div class="quick">
            <img src="img/quick_btn.png" alt="quick">
        </div>
        
        <div id="quickopacity">
            <span style="float:right;margin-right:30px;font-size:4em;color:#fff;">x</span>
            <a href="benefit_card.php">카드<br>추가</a>
            <a class="delete" href="#">카드<br>삭제</a>
        </div>
        
        <script>
            $(document).ready(function() {
                $(".quick").click(function(){
                    $("#quickopacity").css("display","block");
                })
                $("#quickopacity").click(function() {
                    $("#quickopacity").css("display","none");
                });
                
                $(".delete").click(function() {
                    $(".deletebtn a").css("display","block");
                })
                
            })
        </script>
        
    </div>
    
  </body>
</html>