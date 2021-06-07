<?php
  include "header.php";
?>

        <!-- header -->
        <header class="nav-down">
            <img class="header_bg" src="img/header_bg.png" alt="">
            <a class="back"><img src="img/back.png" width="30vw" alt="뒤로가기"></a>
            <a class="desc">회원가입(1/2)</a>
            <a class="close"><img src="img/close.png" width="30vw" alt="닫기"></a>
        </header>
        
        <section class="regist">
            <div class="logo"><img src="img/applogo.png" width="20%" alt="clip"></div>
            <h1>필수정보</h1>
            <p>필수정보의 모든 사항을 기입하셔야 가입하실 수 있습니다.</p>
            
            <form class="regist_form" name="joinForm" action="database/outlet.php" method="post" onsubmit="return checkJoin(joinForm)">
                <input type="hidden" name="outlet" value="memberjoin"/>
                <input type="text" name="id" placeholder="* 아이디(휴대폰번호)를 입력해주세요.">
                <input type="text" name="name" placeholder="* 이름을 입력해주세요.">
                <input type="password" name="pin" placeholder="* 비밀번호 입력(비밀번호는 6~15자 이내로 입력)">
                <input type="password" name="pin2" placeholder="* 비밀번호 재입력(위 작성 된 비밀번호와 동일하게 입력)">
                <div class="birth">
                    <input class="birth1" type="text" name="birth" placeholder="* 생년월일(yymmdd)">
                    <div class="birth2">
                    - &nbsp;
                    <img src="img/birth.png" style="margin-left:20px" width="15px"> &nbsp;
                    <img src="img/birth.png" style="margin-left:-5px" width="15px"> &nbsp;
                    <img src="img/birth.png" style="margin-left:-5px" width="15px"> &nbsp;
                    <img src="img/birth.png" style="margin-left:-5px" width="15px"> &nbsp;
                    <img src="img/birth.png" style="margin-left:-5px" width="15px"> &nbsp;
                    <img src="img/birth.png" style="margin-left:-5px" width="15px"> &nbsp;
                    <img src="img/birth.png" style="margin-left:-5px" width="15px"> &nbsp;
                    </div>
                </div>
                
            <div class="gender">
                <div class="left">
                <input type="radio" id="ex_rd1" name="gender" value="1" checked>
                <label for="ex_rd1">남</label> 
                <input type="radio" id="ex_rd2" name="gender" value="2">
                <label for="ex_rd2">여</label> 
                </div>
                <p style="width:50%; float:right; "><span style="color:#f00;">*</span> 성별을 선택해주세요.</p>
            </div>
            
            
            <h1 style="margin-top:50px;">휴대폰 인증</h1>
            <div class="dlswmd">
            <select class="select">
                <option>통신사</option>
                <option>SKT</option>
                <option>LG</option>
                <option>KT</option>
            </select>
            <input type="text" name="" placeholder="01012345678">
            <input class="dlswmd_num" type="text" name="" placeholder="인증번호를 입력해주세요.">
            <input type="button" onclick="randomnum()" value="인증번호 요청">
            <input class="ghkrdls" onclick="checknum()" type="button" value="인증번호 확인">
            <p style="padding:10px 0 0 10px; font-size:0.7em;">전송 후 3분 이내에 입력해주세요.</p>
            <section class="foot_tab">
                <input type="button" onclick="location.href='index.php'" value="취소">
                <input type="button" onclick="checkJoin(joinForm)" value="가입하기">
            </section>
            </div>
            </form>
        </section>
        
    </div>
    
  </body>
</html>