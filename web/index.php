
    <?php
      include_once("header.php");
    ?>
<script>
$(document).ready(function(){
  $('.visual-slider').bxSlider({

    slideMargin: 0,
    auto: true,
    autoControls: true,
    nextSelector: '#slider-next',
    prevSelector: '#slider-prev',
  });
})
</script>
    <!-- section -->
    <section id="contents">
      <h1 class="hidden">contents</h1>
      <!-- visual -->
      <section class="visual">
        <h2 class="hidden">visual</h2>
        <div class="container">
          <div class="visual-slider">
            <div style="width:1000px;">
            <a href="sub1_usedclip.php"><img style="margin:30px 0 0 50px;" src="img/visual_widget.png" alt="asdasd"></a>
            </div>
            <div style="width:967px;">
            <a href="sub1_usedclip.php"><img style="margin:30px 0 0 50px;" src="img/visual_widget.png" alt="asdasd"></a>
            </div>
          </div>
          <div class="quick_btn">
            <ul>
              <li><a href="#"><img src="img/q1.jpg" alt="맞춤카드찾기"></a></li>
              <li><a href="#"><img src="img/q2.jpg" alt="포인트통합조회"></a></li>
              <li><a href="#"><img src="img/q3.jpg" alt="보유카드조회"></a></li>
              <li><a href="#"><img src="img/q4.jpg" alt="내매장조회"></a></li>
            </ul>
          </div>
          <section>
          <h2 class="hidden">search question</h2>
          <div class="search">
              <ul>
                <li>
                  <a href="cs.php">
                    <div class="question">
                      CLiP이 어디에 사용되는<br/>어플리케이션인가요?
                    </div>
                    <div class="answer">
                      CLip은 빠르고 편리한 혜택 전자지갑<br/>서비스입니다. <br/> 오프라인 매장 별최적의 신용/체크/멤버십카드의 할인적립 정보 및 기타서비스를 제공합니다.
                    </div>
                  </a>
                </li>
                <li>
                  <a href="cs.php">
                    <div class="question">
                      클립포인트는 어디서 사용할<br/>수 있나요?
                    </div>
                    <div class="answer">
                      클립포인트는 CLiP에서 다양한 방법으로
                      적립/사용 가능합니다.  <br/> 적립 된 포인트는
                      CLiP 기프티쇼  <br/>구매 시 바로 사용할 수
                      있는 서비스  <br/>입니다.
                    </div>
                  </a>
                </li>
                <li>
                  <a href="cs.php">
                    <div class="question">
                      스마트 영수증은 어떻게<br/>이용하나요?
                    </div>
                    <div class="answer">
                      카드사 결제 메시지를 수신할 때마다 자동
                      으로 CLiP 스마트 영수증이 발행됩니다. <br/>
                      휴대폰 내 위치를 켜주시면 가맹점 정보 등
                      자세한 정보가 제공됩니다.<br/>&nbsp;
                    </div>
                  </a>
                </li>
                <li>
                  <a href="cs.php">
                    <div class="question">
                      CLiP에서 가입한 멤버십과 가지고<br/>있던 카드 번호가 다른데요?
                    </div>
                    <div class="answer" style="margin-right:0;">
                      제휴사 멤버십 신규 가입고객에게는 신규
                      멤버십 카드번호가 발급되지만, <br/> 해당 제휴
                      멤버십을 타 채널을 통해 기 발급한 고객의
                      경우 멤버십 카드번호가 발급됩니다.
                    </div>
                  </a>
                </li>
              </ul>
            <div class="btn_right"></div>
          </div>
        </section>
        </div>
      </section>

        <!-- clip commendation card -->
        <section class="com_card">
          <h2 class="hidden">clip commendation card</h2>
          <div class="container">
            <h2 class="title">CLip 추천 카드</h2>
            <p class="midtitle">생활과 함께하는 클립 서비스를 즐겨보세요.</p>
            <div class="card_box">
            <div class="tabs" style="clear:both;">
            <ul class="tab-title">
                <li class="active le"><a href="#ntab1">멤버십 카드</a></li>
                <li class="ri"><a href="#ntab2">결제 카드</a></li>
            </ul>

            <div class="tab-cont">
              <div id="ntab1" class="ntab1" style="list-style-type:none;">
                <div>
                <?php
                  include("index_card_con2.php");
                  printf("%s",indexcard());
                ?>
                </div>
              </div>

              <div id="ntab2" class="ntab2 hidden" style="list-style-type:none;">
                <div>
                <?php
                  include("index_card_con.php");
                  printf("%s",indexcard2());
                ?>
                </div>
              </div>
            </div>
          </div>
                <!--<ul>-->
                <!--  <li class="card_list left">-->
                <!--    <div class="card_img">-->
                <!--      <img src="img/card1.png" alt="카드1">-->
                <!--    </div>-->
                <!--    <div>-->
                <!--      <h2 class="card_title">CJ ONE</h2>-->
                <!--      <p class="card_desc">30여개 라이프스타일 브랜드에서 적립/할인 혜택!</p>-->
                <!--    </div>-->
                <!--  </li>-->
                <!--  <li class="card_list">-->
                <!--    <div class="card_img">-->
                <!--      <img src="img/card2.png" alt="카드1">-->
                <!--    </div>-->
                <!--    <div>-->
                <!--      <h2 class="card_title">HAPPY POINT</h2>-->
                <!--      <p class="card_desc">베이커리, 카페 뿐만 아니라 다양한 외식브랜드 적립혜택! </p>-->
                <!--    </div>-->
                <!--  </li>-->
                <!--  <li class="card_list">-->
                <!--    <div class="card_img">-->
                <!--      <img src="img/card3.png" alt="카드1">-->
                <!--    </div>-->
                <!--    <div>-->
                <!--      <h2 class="card_title">L.POINT</h2>-->
                <!--      <p class="card_desc">롯데 50여개 그룹을 결합한 통합 멤버십 혜택!</p>-->
                <!--    </div>-->
                <!--  </li>-->
                <!--  <li class="card_list">-->
                <!--    <div class="card_img">-->
                <!--      <img src="img/card4.png" alt="카드1">-->
                <!--    </div>-->
                <!--    <div>-->
                <!--      <h2 class="card_title">Olleh 멤버십</h2>-->
                <!--      <p class="card_desc">전국 곳곳의 외식/문화/예술 등 다양한 혜택!</p>-->
                <!--    </div>-->
                <!--  </li>-->
                <!--</ul>-->
              </div>
            </div>
          </div>
        </section>

        <!-- clip used -->
        <article class="used">
          <h2 class="hidden">clip used</h2>
          <div class="container used">
            <h2 class="title">CLIP 사용법</h2>
            <p class="midtitle">생활과 함께하는 클립 서비스를 즐겨보세요.</p>
            <div class="bxslider">
              <ul>
                <li style="margin-left:100px;"><img src="img/sub/clipused1.png" alt="클립사용법1"></li>
              </ul>
              <ul>
                <li style="margin-left:100px;"><img src="img/sub/clipused2.png" alt="클립사용법2"></li>
              </ul>
              <ul>
                <li style="margin-left:100px;"><img src="img/sub/clipused3.png" alt="클립사용법3"></li>
              </ul>
              <ul>
                <li style="margin-left:100px;"><img src="img/sub/clipused4.png" alt="클립사용법4"></li>
              </ul>
            </div>
          </div>
        </article>

<script>
  $(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
        <!-- clip media -->
        <section class="media">
          <h2 class="hidden">clip media</h2>
          <div class="container used">
            <h2 class="title white">CLiP 미디어</h2>
            <p class="midtitle white">더욱 새로워진 CLiP을 만나보세요.</p>
            <div class="bxslider">
            <ul>
              <li>
                <div style="text-align: center; margin-top:50px;">
                  <iframe style="margin:0 auto;" width="640" height="360" src="https://www.youtube.com/embed/lyUpMKyP0lE?vq=hd760&autoplay=0&start=0&rel=0"
                  frameborder="0" allowfullscreen></iframe>
                </div>
              </li>
            </ul>
            <ul>
              <li>
                <div style="text-align: center; margin-top:50px;">
                  <iframe style="margin:0 auto;" width="640" height="360"  src="https://www.youtube.com/embed/Enf6hW3kosI" frameborder="0" gesture="media" allowfullscreen></iframe>
                </div>
              </li>
            </ul>
            <ul>
              <li>
                <div style="text-align: center; margin-top:50px;">
                  <iframe style="margin:0 auto;" width="640" height="360"  src="https://www.youtube.com/embed/Y21LbiG_Kn8" frameborder="0" gesture="media" allowfullscreen></iframe>
                </div>
              </li>
            </ul>
          </div>
          </div>
        </section>



        <script>
          $(document).ready(function() {
            $(".benefit .link a").mouseover(function() {
              $(this).children(".bread").attr("src","img/benefit_bread_over.png");
              $(this).children(".shop").attr("src","img/benefit_shop_over.png");
              $(this).children(".free").attr("src","img/benefit_free_over.png");
              $(this).children(".cafe").attr("src","img/benefit_cafe_over.png");
              $(this).children(".food").attr("src","img/benefit_food_over.png");
              $(this).children(".car").attr("src","img/benefit_car_over.png");
              $(this).children(".edu").attr("src","img/benefit_edu_over.png");
              $(this).children(".movie").attr("src","img/benefit_movie_over.png");
            })
            $(".benefit .link a").mouseout(function() {
              $(this).children(".bread").attr("src","img/benefit_bread.png");
              $(this).children(".shop").attr("src","img/benefit_shop.png");
              $(this).children(".free").attr("src","img/benefit_free.png");
              $(this).children(".cafe").attr("src","img/benefit_cafe.png");
              $(this).children(".food").attr("src","img/benefit_food.png");
              $(this).children(".car").attr("src","img/benefit_car.png");
              $(this).children(".edu").attr("src","img/benefit_edu.png");
              $(this).children(".movie").attr("src","img/benefit_movie.png");
            })
          })
        </script>
        <!-- clip benefit -->
        <section class="benefit">
          <h2 class="hidden">clip benefit</h2>
          <div class="container">
            <h2 class="title">CLip 제휴사 혜택</h2>
            <p class="midtitle">클립에서 제공하는 풍성한 제휴사 혜택을 만나보세요</p>
            <div class="link">
              <a href="sub5_store.php"><img class="bread" src="img/benefit_bread.png" alt=""></a>
              <a href="sub5_store.php"><img class="shop" src="img/benefit_shop.png" alt=""></a>
              <a href="sub5_store.php"><img class="free" src="img/benefit_free.png" alt=""></a>
              <a href="sub5_store.php"><img class="cafe" src="img/benefit_cafe.png" alt=""></a>
              <a href="sub5_store.php"><img class="food" src="img/benefit_food.png" alt=""></a>
              <a href="sub5_store.php"><img class="car" src="img/benefit_car.png" alt=""></a>
              <a href="sub5_store.php"><img class="edu" src="img/benefit_edu.png" alt=""></a>
              <a href="sub5_store.php"><img class="movie" src="img/benefit_movie.png" alt=""></a>
            </div>


            <div class="more">
              <a href="sub5_store.php"><img src="img/more.png" alt="전체보기"></a>
            </div>
          </div>
        </section>

        <!-- clip event -->
        <aside class="eventWrap">
          <h2 class="hidden">clip event</h2>
          <div class="event">
            <img src="img/event1.png" alt="">
            <img src="img/event2.png" alt="">
          </div>
        </aside>

        <!-- clip inquiry -->
        <section class="inquiry">
          <h2 class="hidden">clip inquiry</h2>
          <div class="container">
            <h2 class="title white">CLiP 제휴가맹 문의</h2>
            <p class="midtitle white" style="line-height:1.5em;">제휴 가맹 문의하기를 통해 e-mail을 보내주시면<br>
                                                                클립 관리자가 가장 빠른 시간 내에 친절하게 상담해 드리겠습니다.</p>
            <form action="">
              <select>
                <option>지역선택</option>
                <option>서울</option>
                <option>경기</option>
                <option>강원</option>
                <option>충북</option>
                <option>충남</option>
                <option>경북</option>
                <option>경남</option>
                <option>전북</option>
                <option>전남</option>
                <option>제주</option>
              </select>
              <select>
                <option>분야 선택</option>
                <option>베이커리</option>
                <option>쇼핑</option>
                <option>편의점</option>
                <option>외식</option>
                <option>주유</option>
                <option>교육</option>
                <option>문화</option>
                <option>여행</option>

              </select><br>
              <input type="text" placeholder="이름" style="color:#fff" >
              <input type="text" placeholder="전화번호" style="color:#fff" ><br>
              <input class="asd" type="text" placeholder="내용을 입력해주세요." style="color:#fff" >
              <div class="btn">
                <input type="submit" value="제휴가맹 혜택 보기">
                <input type="submit" value="문의하기">
              </div>
            </form>
          </div>

        </section>

    </section>

    <?php
      include_once("footer.php");
    ?>



  </body>
</html>