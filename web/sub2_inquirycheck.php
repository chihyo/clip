    <?php
      include_once("header.php");
    ?>

    <img src="img/sub/sub2_inquiry_ques.png" alt="clip 사용법">
    <section class="local_navi">
      <div class="container">
        <ul class="cleft">
          <li><a href="index.php"><img src="img/sub/home.png" alt="홈" width="17px"/></a> 홈</li>
          <li style="color:#999">></li>
          <li>제휴가맹 ▼</li>
          <li style="color:#999">></li>
          <li>제휴가맹 문의 ▼</li>
        </ul>
        <ul class="cright">
          <li><img src="img/sub/plus.png" alt="확대"/> 확대</li>
          <li><img src="img/sub/minous.png" alt="축소"/> 축소</li>
          <li><img src="img/sub/print.png" alt="인쇄"/></li>
        </ul>
      </div>
    </section>

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



    <?php
      include_once("footer.php");
    ?>



  </body>
</html>