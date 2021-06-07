    <?php
      include_once("header.php");
    //   $root = $_SERVER['DOCUMENT_ROOT'];
    // //echo $root;
    // include_once $root."/moviestar/database/query.php";
    ?>

    <img src="img/sub/event_visual.png" alt="clip이벤트">
    <section class="local_navi">
      <div class="container">
        <ul class="cleft">
          <li><a href="index.php"><img src="img/sub/home.png" alt="홈" width="17px"/></a> 홈</li>
          <li style="color:#999">></li>
          <li>혜택 ▼</li>
          <li style="color:#999">></li>
          <li>제휴카드 정보 ▼</li>
        </ul>
        <ul class="cright">
          <li><img src="img/sub/plus.png" alt="확대"/> 확대</li>
          <li><img src="img/sub/minous.png" alt="축소"/> 축소</li>
          <li><img src="img/sub/print.png" alt="인쇄"/></li>
        </ul>
      </div>
    </section>

    <div class="eventWrap tabs container" style="clear:both;">
      <ul class="tab-title">
          <li class="active le"><a href="#ntab1">전체</a></li>
          <li class="me"><a href="#ntab2">이벤트</a></li>
          <li class="ri"><a href="#ntab3">혜택</a></li>
      </ul>

      <div class="tab-cont">
        <div id="ntab1" class="ntab1">
          <p>클립의 이벤트와 혜택을 확인해보세요.</p>
          <img src="img/event/event1.jpg">
          <img src="img/event/benefit1.jpg">
          <img src="img/event/event2.jpg">
          <img src="img/event/benefit2.jpg">
          <img src="img/event/event3.jpg">
          <img src="img/event/event4.jpg">
          <img src="img/event/event5.jpg">
          <img src="img/event/event6.jpg">
          <img src="img/event/benefit3.jpg">
          <img src="img/event/event7.jpg">
          <img src="img/event/benefit4.jpg">
          <img src="img/event/benefit5.jpg">
          <img src="img/event/event8.jpg">
          <img src="img/event/event9.jpg">
          <img src="img/event/event10.jpg">
          <img src="img/event/event11.jpg">
        </div>
        <div id="ntab2" class="ntab2 hidden">
          <p>클립의 이벤트를 확인해보세요.</p>
          <img src="img/event/event1.jpg">
          <img src="img/event/event2.jpg">
          <img src="img/event/event3.jpg">
          <img src="img/event/event4.jpg">
          <img src="img/event/event5.jpg">
          <img src="img/event/event6.jpg">
          <img src="img/event/event7.jpg">
          <img src="img/event/event8.jpg">
          <img src="img/event/event9.jpg">
          <img src="img/event/event10.jpg">
          <img src="img/event/event11.jpg">

        </div>
        <div id="ntab3" class="ntab3 hidden">
          <p>클립의 혜택을 확인해보세요.</p>
          <img src="img/event/benefit1.jpg">
          <img src="img/event/benefit2.jpg">
          <img src="img/event/benefit3.jpg">
          <img src="img/event/benefit4.jpg">
          <img src="img/event/benefit5.jpg">

        </div>
      </div>
    </div>

    <?php
      include_once("footer.php");
    ?>



  </body>
</html>