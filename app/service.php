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
<script>
    function checkevent() {
        if($('.td11').css("background")!="#ed1c24"){
        alert("출석체크가 완료되었습니다.");
        $('.checkevent span').text("7");
        $('.td11').css("background","#ed1c24");
        $('.td11').css("color","#fff");
        }else if($('.td11').css("background")=="#ed1c24") {
            alert("이미 출석체크를 완료하였습니다.");
        }
    }
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
                <a onclick="checkevent()">출석체크하기</a>
            </div>
        </section>
        <div class="checkevent">
            <div>12월에 7번 출석하면 50P 즉시 지급</div>
            <div> <span style="color:#ed1c24;">6</span> / 30회</div>
        </div>
        
        <div class="checkevent" style="margin-top:4%">
            <div>12월 출석체크 확인</div>
            <section class="calender">
            <table>
                <tr>
                    <th>SUN</th>
                    <th>MON</th>
                    <th>TUE</th>
                    <th>WED</th>
                    <th>THR</th>
                    <th>FRI</th>
                    <th>SAT</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="background:#ed1c24; color:#fff">1</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td style="background:#ed1c24; color:#fff">3</td>
                    <td style="background:#ed1c24; color:#fff">4</td>
                    <td>5</td>
                    <td style="background:#ed1c24; color:#fff">6</td>
                    <td>7</td>
                    <td style="background:#ed1c24; color:#fff">8</td>
                    <td style="background:#ed1c24; color:#fff">9</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td class="td11">11</td>
                    <td class="td12">12</td>
                    <td class="td13">13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </section>
        
            <div class="checkevent">
                <div>출석 선물</div>
            </div>
            <div class="mgt">
                <img src="img/eventpresent.jpg" width="100%">    
            </div>
        </div>
        
        
        
        
        
        <div class="event_foot_btn">
            <a href="service.php">
                <div class="bd2">
                    <img src="img/service_check_icon_over.png" alt="매장찾기">
                </div>
            </a>
            <a href="service2.php">
                <div class="bd2">
                    <img src="img/service_event_icon.png" alt="카드찾기">
                </div>
            </a>
            <a href="#">
                <div class="bd2">
                    <img src="img/service_find_icon.png" alt="쿠폰찾기">
                </div>
            </a>
        </div>
        
    </div>
    
  </body>
</html>