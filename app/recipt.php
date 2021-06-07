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
            <a class="desc">스마트영수증</a>
            <a href="myclip.php" class="close"><img src="img/close.png" width="30vw" alt="닫기"></a>
        </header>
        
        <section id="smartrecipt">
            <select>
                <option>카드선택</option>
                <option>전체</option>
                <option>신한카드</option>
                <option>하나카드</option>
                <option>우리카드</option>
                <option>경남은행카드</option>
                <option>롯데카드</option>
                <option>외환은행카드</option>
                <option>우체국카드</option>
            </select>
            <select>
                <option>분류선택</option>
                <option>전체</option>
                <option>쇼핑</option>
                <option>마트</option>
                <option>편의점</option>
                <option>카페</option>
                <option>외식</option>
                <option>교통</option>
                <option>교육</option>
                <option>문화</option>
                <option>기타</option>
            </select>
            <select>
                <option>기간선택</option>
            </select>
        </section>
        <section class="total">
            <div>총 사용금액</div>
            <div><span style="font-size:1.4em; color:#ed1c24;font-weight: bold;">400,000</span> 원</div>
        </section>
        <section class="cont">
            <div>
                <select>
                    <option>2017.06 </option>
                    <option>2017.07 </option>
                    <option>2017.08 </option>
                    <option>2017.09 </option>
                    <option>2017.10 </option>
                    <option>2017.11 </option>
                    <option>2017.12 </option>
                </select>
            </div>
            <div>달력</div>
        </section>
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
                    <td>1</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
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
        
        <section class="recipt_list">
            <div>2017.12.01(수)</div>
            <div>편집</div>
        </section>
        <section class="recipt_list_detail">
            <div>13:40</div>
            <div>
                <div>TNGT</div>
                <div>SHINHANCARD S_CHOICE</div>
            </div>
            <div>
                <div style="text-align:right;">승인</div>
                <div style="text-align:right; color:#ed1c24">30,000 원</div>
            </div>
        </section><section class="recipt_list_detail">
            <div>13:40</div>
            <div>
                <div>TNGT</div>
                <div>SHINHANCARD S_CHOICE</div>
            </div>
            <div>
                <div style="text-align:right;">승인</div>
                <div style="text-align:right; color:#ed1c24">30,000 원</div>
            </div>
        </section><section class="recipt_list_detail">
            <div>13:40</div>
            <div>
                <div>TNGT</div>
                <div>SHINHANCARD S_CHOICE</div>
            </div>
            <div>
                <div style="text-align:right;">승인</div>
                <div style="text-align:right; color:#ed1c24">30,000 원</div>
            </div>
        </section>
        <section class="recipt_list_detail">
            <div>13:40</div>
            <div>
                <div>TNGT</div>
                <div>SHINHANCARD S_CHOICE</div>
            </div>
            <div>
                <div style="text-align:right;">승인</div>
                <div style="text-align:right; color:#ed1c24">30,000 원</div>
            </div>
        </section>
    </div>
    
  </body>
</html>