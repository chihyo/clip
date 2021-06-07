    <?php
include_once("header.php");
    ?>
    <img src="img/sub/sub5_cardinfo.png" alt="clip 사용법">
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

    <div class="tabs" style="clear:both;">
      <ul class="tab-title">
          <li class="active le"><a href="#ntab1">멤버십 카드</a></li>
          <li class="ri"><a href="#ntab2">결제 카드</a></li>
      </ul>

      <div class="tab-cont">
        <div id="ntab1" class="ntab1">
          <p>각 멤버십카드의 주요 혜택을 확인하세요.</p>
          <?php
            include("sub5_membershipcard_con.php");
          ?>
        </div>
        <div id="ntab2" class="ntab2 hidden">
          <p>각 결제카드의 주요 혜택을 확인하세요.</p>
          <?php
            include("sub5_membershipcard_con.php");
          ?>
        </div>
      </div>
    </div>

    <?php
      include_once("footer.php");
    ?>



  </body>
</html>