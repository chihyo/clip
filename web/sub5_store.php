    <?php
      include_once("header.php");
    ?>

    <script>

$(document).ready(function() {
    $('.tabs .sub5-tab-title a').on('click', function(e)  {

        var currentAttrValue = $(this).attr('href');

        // Show/Hide Tabs
        $('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();

        // Change/remove current tab to active
        $(this).parent('li').addClass('active').siblings().removeClass('active');

        e.preventDefault();
    });

});
    </script>

    <img src="img/sub/sub5_storeinfo.png" alt="clip 사용법">
    <section class="local_navi">
      <div class="container">
        <ul class="cleft">
          <li><a href="index.php"><img src="img/sub/home.png" alt="홈" width="17px"/></a> 홈</li>
          <li style="color:#999">></li>
          <li>혜택 ▼</li>
          <li style="color:#999">></li>
          <li>제휴매장 정보 ▼</li>
        </ul>
        <ul class="cright">
          <li><img src="img/sub/plus.png" alt="확대"/> 확대</li>
          <li><img src="img/sub/minous.png" alt="축소"/> 축소</li>
          <li><img src="img/sub/print.png" alt="인쇄"/></li>
        </ul>
      </div>
    </section>

    <div class="tabs" style="clear:both;">
      <ul class="sub5-tab-title">
          <li class="tab1 active"><a href="#ntab1">전체</a></li>
          <li class="tab2"><a href="#ntab2">베이커리</a></li>
          <li class="tab3"><a href="#ntab3">쇼핑</a></li>
          <li class="tab4"><a href="#ntab4">편의점</a></li>
          <li class="tab5"><a href="#ntab5">카페</a></li>
          <li class="tab6"><a href="#ntab6">외식</a></li>
          <li class="tab7"><a href="#ntab7">주유</a></li>
          <li class="tab8"><a href="#ntab8">교육</a></li>
          <li class="tab9"><a href="#ntab9">문화</a></li>
          <li class="tab0"><a href="#ntab0">테마파크</a></li>
      </ul>

      <div class="tab-cont">
        <div id="ntab1" class="ntab1" style="padding-top:100px;">
          <p>제휴 가맹점에서 클립 혜택을 누리세요.</p>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (1).jpg">
              <p>국립오페라</p>
              <p>15% 할인</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - 티켓구매 시 15%할인 혜택</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.nationalopera.org/"> http://www.nationalopera.org/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p>- 티켓 수령 시 해피포인트카드 제시(미지참 시 차액지불) / 1인 2매 할인<br/>
(예매 : 예술의전당 580-1300 / 문의 : 국립오페라단 586-5363 )</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (2).jpg">
              <p>AK몰</p>
              <p>1.5% HP 적립</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - 제품 구매금액 1.5% HP 적립 (익월 15일 일괄적립)</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.nationalopera.org/"> http://www.nationalopera.org/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p> - 해피포인트카드 홈페이지 로그인 후 링크페이지 접속<br/>
- 전자상품(생활가전,카메라,컴퓨터), 서비스상품(순금,상품권,모바일쿠폰), 몰인몰상품 제외<br/>
- PC Web에서 사이트 선택 시 해피포인트 제휴쇼핑몰로 이동합니다. <br/>
- 해피앱에서 상품 구매를 원하실 경우 '제휴쇼핑몰' 메뉴를 이용해주세요.</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (3).jpg">
              <p>YES24</p>
              <p>3% HP 적립</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - 제품 구매금액 3% HP 적립 (익월 15일 일괄적립)</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.nationalopera.org/"> http://www.nationalopera.org/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p>  - 해피포인트카드 홈페이지 로그인 후 링크페이지 접속 <br/>
- 영화, 공연 카테고리 상품 적립 제외  <br/>
- PC Web에서 사이트 선택 시 해피포인트 제휴쇼핑몰로 이동합니다.  <br/>
- 해피앱에서 상품 구매를 원하실 경우 '제휴쇼핑몰' 메뉴를 이용해주세요.</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (4).jpg">
              <p>G마켓</p>
              <p>0.5% 적립</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - G마켓에서 적용 카테고리 상품 구매금액의 0.5% 적립 (익월 16일까지 일괄적립)</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.nationalopera.org/"> http://www.nationalopera.org/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p>   - 전체 카테고리 적립가능 (단, 디지털 등 일부 카테고리 및 배송비 제외) <br/>
- G마켓에서 상품구매 후 상품평 작성 시, 해피포인트를 체크해야 제공 <br/>
(단, G마켓 회원과 해피포인트 회원 본인이 동일해야 인증가능)</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (5).jpg">
              <p>AJ렌터카</p>
              <p>최대 40% 할인+5% HP 적립</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - AJ렌터카 이용시 최대 40% 할인 혜택 <br/>
- 구매금액 5% HP 적립(익월 15일 일괄적립) <br/>
- 비수기 내륙 : 주중/주말 40%, 성수기 내륙 : 주중/주말 30% <br/>
- 비수기/성수기 제주 : 주중/주말 시즌별 할인 AJ 렌터카 사이트 내 별도 공지</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href="http://www.ajrentacar.co.kr">  http://www.ajrentacar.co.kr</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p>    - 현장에서 결재 시 해피포인트카드 제시 <br/>
- 시즌기간(성수기,비수기) AJ렌터카기준 적용</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (6).jpg">
              <p>GS25</p>
              <p>구매금액의 15% 차감할인</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p>  - 제품 구매금액의 15% 차감할인</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.gs25.com"> http://www.gs25.com</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p>- 1천포인트 이상 보유시 사용 가능 <br/>
- 팝티머니카드로 이용 시, 해피포인트 사용금액의 10% 해피포인트로 페이백<br/>
- 제휴카드는 본 행사 혜택 적용 불가</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (1).png">
              <p>THE BODY SHOP</p>
              <p>3% HP 적립</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - 제품 구매금액 3% HP 적립 (익월 15일 일괄적립)</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.nationalopera.org/"> http://www.nationalopera.org/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p> - 해피포인트카드 홈페이지 로그인 후 링크페이지 접속 <br/>
- 일부상품 적립 제외 <br/>
- 온라인 홈페이지 (PC버전) 이용시에만 해피포인트 적립 가능 <br/>
- PC Web에서 사이트 선택 시 해피포인트 제휴쇼핑몰로 이동합니다. <br/>
- 해피앱에서 상품 구매를 원하실 경우 '제휴쇼핑몰' 메뉴를 이용해주세요.</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (2).png">
              <p>CU</p>
              <p>구매금액의 15% 차감할인</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p>  - 제품 구매금액의 15% 차감할인</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href="http://cu.bgfretail.com"> http://cu.bgfretail.com</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p>- 1천포인트 이상 보유 시 사용 가능 <br/>
- 결제금액 1천원 이상 시 사용 가능 <br/>
- 제휴카드는 본 행사 혜택 적용 불가</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (3).png">
              <p>메가박스</p>
              <p>관람권 2,000원 HP 차감할인</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p>- 메가박스 영화관람권 2,000포인트 차감 할인 (1일 1회)</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.megabox.co.kr/"> http://www.megabox.co.kr/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p> - 티켓 1매당 2,000원 할인 <br/>
- 할인금액 상당의 해피포인트 차감</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (4).png">
              <p>가자고</p>
              <p>상품 이용 후, 최소 2% ~ 최대 4% HP 적립</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - 최소 2% ~ 최대 4% HP 적립 <br/>
- 숙박 상품 2% <br/>
- 레저입장권 상품 4%<br/>
- 항공권 해당 없음</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.nationalopera.org/"> http://www.nationalopera.org/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p> - 적립 기준은 PC/ App 로그인 후, ‘가자고 제휴몰’에서 구매한 상품에 한하여 제공<br/>
- 해피포인트는 구매상품 사용완료를 기준으로, 사용월 기준 익월 15일경 적립</p>
              </div>
            </div>
          </div>
        </div>
        <div id="ntab2" class="ntab2 hidden" style="padding-top:100px;">
          <p>제휴 가맹점에서 클립 혜택을 누리세요.</p>



        </div>
        <div id="ntab3" class="ntab3 hidden" style="padding-top:100px;">
          <p>제휴 가맹점에서 클립 혜택을 누리세요.</p>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (2).jpg">
              <p>AK몰</p>
              <p>1.5% HP 적립</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - 제품 구매금액 1.5% HP 적립 (익월 15일 일괄적립)</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.nationalopera.org/"> http://www.nationalopera.org/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p> - 해피포인트카드 홈페이지 로그인 후 링크페이지 접속<br/>
- 전자상품(생활가전,카메라,컴퓨터), 서비스상품(순금,상품권,모바일쿠폰), 몰인몰상품 제외<br/>
- PC Web에서 사이트 선택 시 해피포인트 제휴쇼핑몰로 이동합니다. <br/>
- 해피앱에서 상품 구매를 원하실 경우 '제휴쇼핑몰' 메뉴를 이용해주세요.</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (1).png">
              <p>THE BODY SHOP</p>
              <p>3% HP 적립</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - 제품 구매금액 3% HP 적립 (익월 15일 일괄적립)</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.nationalopera.org/"> http://www.nationalopera.org/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p> - 해피포인트카드 홈페이지 로그인 후 링크페이지 접속 <br/>
- 일부상품 적립 제외 <br/>
- 온라인 홈페이지 (PC버전) 이용시에만 해피포인트 적립 가능 <br/>
- PC Web에서 사이트 선택 시 해피포인트 제휴쇼핑몰로 이동합니다. <br/>
- 해피앱에서 상품 구매를 원하실 경우 '제휴쇼핑몰' 메뉴를 이용해주세요.</p>
              </div>
            </div>
          </div>
        </div>

        <div id="ntab4" class="ntab4 hidden" style="padding-top:100px;">
          <p>제휴 가맹점에서 클립 혜택을 누리세요.</p>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (6).jpg">
              <p>GS25</p>
              <p>구매금액의 15% 차감할인</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p>  - 제품 구매금액의 15% 차감할인</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.gs25.com"> http://www.gs25.com</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p>- 1천포인트 이상 보유시 사용 가능 <br/>
- 팝티머니카드로 이용 시, 해피포인트 사용금액의 10% 해피포인트로 페이백<br/>
- 제휴카드는 본 행사 혜택 적용 불가</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (2).png">
              <p>CU</p>
              <p>구매금액의 15% 차감할인</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p>  - 제품 구매금액의 15% 차감할인</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href="http://cu.bgfretail.com"> http://cu.bgfretail.com</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p>- 1천포인트 이상 보유 시 사용 가능 <br/>
- 결제금액 1천원 이상 시 사용 가능 <br/>
- 제휴카드는 본 행사 혜택 적용 불가</p>
              </div>
            </div>
          </div>
        </div>
        <div id="ntab5" class="ntab5 hidden" style="padding-top:100px;">
          <p>제휴 가맹점에서 클립 혜택을 누리세요.</p>

        </div>
        <div id="ntab6" class="ntab6 hidden" style="padding-top:100px;">
          <p>제휴 가맹점에서 클립 혜택을 누리세요.</p>

        </div>
        <div id="ntab7" class="ntab7 hidden" style="padding-top:100px;">
          <p>제휴 가맹점에서 클립 혜택을 누리세요.</p>

        </div>
        <div id="ntab8" class="ntab8 hidden" style="padding-top:100px;">
          <p>제휴 가맹점에서 클립 혜택을 누리세요.</p>

        </div>
        <div id="ntab9" class="ntab9 hidden" style="padding-top:100px;">
          <p>제휴 가맹점에서 클립 혜택을 누리세요.</p>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (1).jpg">
              <p>국립오페라</p>
              <p>15% 할인</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - 티켓구매 시 15%할인 혜택</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.nationalopera.org/"> http://www.nationalopera.org/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p>- 티켓 수령 시 해피포인트카드 제시(미지참 시 차액지불) / 1인 2매 할인<br/>
(예매 : 예술의전당 580-1300 / 문의 : 국립오페라단 586-5363 )</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (3).png">
              <p>메가박스</p>
              <p>관람권 2,000원 HP 차감할인</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p>- 메가박스 영화관람권 2,000포인트 차감 할인 (1일 1회)</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.megabox.co.kr/"> http://www.megabox.co.kr/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p> - 티켓 1매당 2,000원 할인 <br/>
- 할인금액 상당의 해피포인트 차감</p>
              </div>
            </div>
          </div>
          <div class="storelist container">
            <div class="storelist_img">
              <img src="img/store_ (4).png">
              <p>가자고</p>
              <p>상품 이용 후, 최소 2% ~ 최대 4% HP 적립</p>
            </div>
            <div class="storelist_txt">
              <div>
                <p>대 상</p>
                <p>클립 전 사용자</p>
              </div>
              <div>
                <p>내 용</p>
                <p> - 최소 2% ~ 최대 4% HP 적립 <br/>
- 숙박 상품 2% <br/>
- 레저입장권 상품 4%<br/>
- 항공권 해당 없음</p>
              </div>
              <div>
                <p>사 이 트</p>
                <p><a href=" http://www.nationalopera.org/"> http://www.nationalopera.org/</a></p>
              </div>
              <div>
                <p>주 의 사 항</p>
                <p> - 적립 기준은 PC/ App 로그인 후, ‘가자고 제휴몰’에서 구매한 상품에 한하여 제공<br/>
- 해피포인트는 구매상품 사용완료를 기준으로, 사용월 기준 익월 15일경 적립</p>
              </div>
            </div>
          </div>
        </div>
        <div id="ntab10" class="ntab0 hidden" style="padding-top:100px;">
          <p>제휴 가맹점에서 클립 혜택을 누리세요.</p>


        </div>
      </div>
    </div>

    <?php
      include_once("footer.php");
    ?>



  </body>
</html>