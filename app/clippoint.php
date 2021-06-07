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
            <a class="desc">클립포인트</a>
            <a href="myclip.php" class="close"><img src="img/close.png" width="30vw" alt="닫기"></a>
        </header>
        
        <section class="clippoint">
            <div class="event1">
                <div class="mg">
                    <div>
                        <a>사용가능 포인트</a>
                        <a style="color:#666">조회 기준 날짜  |  2017.05.30</a>
                    </div>
                    <div>500 <span style="font-size:0.7em; color:#333;"> p</span></a>
                    </div>
                </div>
                <div class="point_btn">
                    <a>즉시적립하기</a>
                    <a>기프티쇼 바로가기</a>
                </div>
            </div>
            
            
            <section class="list">
                <div class="point tabs">
                    <ul class="tab-title">
                        <li class="active bd"><a href="#ntab1">적립내역</a></li>
                        <li class="bd"><a href="#ntab2">사용내역</a></li>
                    </ul>
                    <div class="tab-cont">
                        <div id="ntab1" class="ntab1">
                            <div class="list-item">
                                <div class="list-item-left">
                                    <h2>[출석체크]4월 출석체크 이벤트</h2>
                                    <h4>[출석체크]4월 출석체크 이벤트</h2>
                                </div>
                                <div class="list-item-right">
                                    <h3>+ 200 P</h3>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="list-item-left">
                                    <h2>[출석체크]4월 출석체크 이벤트</h2>
                                    <h4>[출석체크]4월 출석체크 이벤트</h2>
                                </div>
                                <div class="list-item-right">
                                    <h3>+ 200 P</h3>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="list-item-left">
                                    <h2>[출석체크]4월 출석체크 이벤트</h2>
                                    <h4>[출석체크]4월 출석체크 이벤트</h2>
                                </div>
                                <div class="list-item-right">
                                    <h3>+ 200 P</h3>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="list-item-left">
                                    <h2>[출석체크]4월 출석체크 이벤트</h2>
                                    <h4>[출석체크]4월 출석체크 이벤트</h2>
                                </div>
                                <div class="list-item-right">
                                    <h3>+ 200 P</h3>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="list-item-left">
                                    <h2>[출석체크]4월 출석체크 이벤트</h2>
                                    <h4>[출석체크]4월 출석체크 이벤트</h2>
                                </div>
                                <div class="list-item-right">
                                    <h3>+ 200 P</h3>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="list-item-left">
                                    <h2>[출석체크]4월 출석체크 이벤트</h2>
                                    <h4>[출석체크]4월 출석체크 이벤트</h2>
                                </div>
                                <div class="list-item-right">
                                    <h3>+ 200 P</h3>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="list-item-left">
                                    <h2>[출석체크]4월 출석체크 이벤트</h2>
                                    <h4>[출석체크]4월 출석체크 이벤트</h2>
                                </div>
                                <div class="list-item-right">
                                    <h3>+ 200 P</h3>
                                </div>
                            </div>
                        </div>
                        <div id="ntab2" class="ntab2 hidden">
                        </div>
                    </div>
                </div>
            </section>
        </section>
        
        
    
  </body>
</html>