<?php
  include "header.php";
?>

        <section class="regist login">
            <div class="logo"><img src="img/login_bg.png" width="100%" alt="clip"></div>
            
            <form class="regist_form login_form" name="loginForm" action="database/outlet.php" method="get">
                <input type="hidden" name="outlet" value="memberlogin"/>
                <input type="text" name="id" placeholder="아이디(휴대폰번호)를 입력해주세요.">
                <input type="password" name="pin" placeholder="비밀번호 입력(비밀번호는 6~15자 이내로 입력)">

                <section class="login_foot_tab">
                <input type="submit" value="로그인">
                </section>
                
                <a class="link" href="regist.php">회원가입</a>
            </form>
        </section>
        
    </div>
    
  </body>
</html>