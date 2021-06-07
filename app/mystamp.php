<?php
  include "header.php";
?>
<script>
    $(document).ready(function() {
        $("#smartrecipt select").on("change", function() {
            $(this).css("background","url('../img/arrow_bg.png') no-repeat 100% 100%,#fff");
            $(this).css("background-size","15%");
        })
    })
</script>
        <!-- header -->
        <header class="nav-down">
            <img class="header_bg" src="img/header_bg.png" alt="">
            <a href="myclip.php" class="back"><img src="img/back.png" width="30vw" alt="뒤로가기"></a>
            <a class="desc">내스탬프</a>
            <a href="myclip.php" class="close"><img src="img/close.png" width="30vw" alt="닫기"></a>
        </header>
        
        <section class="mystamp">
            <a class="box">
            <div>사용가능 스탬프</div>
            <div><span style="color:#ed1c24; font-size:1.4em;">4</span>개</div>
            </a>
        </section>
        <section id="title">
            <a>내 스탬프 <span style="margin-left:1%;font-size:0.8em; color:#999;">4장</span></a>
            <a style="font-size:1em; color:#999;">종료된 스탬프 보기</a>
        </section>
        <section class="mystamp_con">
            <div class="visual-slider">
                <div class="event1">
                </div>
                <div class="event1">
                </div>
                <div class="event1">
                </div>
                <div class="event1">
                </div>
            </div>
        </section>
        
        <section id="title" style="margin-top:4%;">
            <a>추천 스탬프 <span style="margin-left:1%;font-size:0.8em; color:#999;">3장</span></a>
            <a></a>
        </section>
        <section class="co_stamp">
            <img src="img/co_stamp.png">
            <img src="img/co_stamp.png">
            <img src="img/co_stamp.png">
        </section>
        
        <section id="more" style="margin-top:4%;">
            <a>스탬프 더보기</a>
            <a></a>
        </section>
    </div>
    
  </body>
</html>