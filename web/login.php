    <style>
      legend {
        font-size:24px !important;
        width:100%;
        height:80px;

      }

      .login_form {
        width:100%;
        margin:60px auto;
      }

      label.id {
        display:block;
        color:#333;
        font-size:24px;
        width:600px;
        height:80px;
        border:none;
        border-top:solid 3px #ed2f14;
        border-bottom:dotted 1px #ccc;
        margin:0 auto;
        padding:0;
        background:url(img/login-id.png) no-repeat 50% 50%;
      }

      label.pw {
        display:block;
        color:#333;
        font-size:24px;
        width:600px;
        height:80px;
        border:none;
        border-bottom:solid 3px #ed2f14;
        margin:0 auto;
        padding:0;
      }

      label.id img {
        float:left;
        width:50px;
        text-align:center;
        padding:10px;
      }

      label.pw img {
        float:left;
        width:50px;
        text-align:center;
        padding:15px 10px;
      }


      .login_box input[type="text"] {
        display: inline-block;
        color:#333;
        font-size:24px;
        width:520px;
        height:80px;
        padding:10px;
        border:none;
        margin:0 auto;
      }
      .login_box input[type="password"] {
        color:#333;
        color:#333;
        font-size:24px;
        width:520px;
        height:80px;
        padding:10px;
        border:none;
        margin:0 auto;
      }
      .login {
        text-align:center;
      }

      .btn_login a {
        display:block;
        width:600px;
        background:#ccc;
        font-size:24px;
        text-align:center;
        line-height: 3em;
        margin:30px auto;
      }

      .btn_box {
        width:600px;
        margin:0 auto;
        font-size:16px;
        color:#666;
      }

      .btn_box a {
        color:#666;
        padding-left:10px;
        padding-right:10px;
        border-right:solid 1px #ccc;
        margin:0;
      }

      .btn_box a:last-child {
        border:none;
        padding-right:0;
      }

      .btn_box > .check_box {
        float:left;
      }
      .btn_box > .btn {
        float:right;
        margin:0;
        padding:0;
      }

    </style>
    <?php
      include_once("header.php");
    ?>

    <img src="img/sub/sub-login-bg.png" alt="로그인">
    <section class="local_navi">
      <div class="container">
        <ul class="cleft">
          <li><a href="index.php"><img src="img/sub/home.png" alt="홈" width="17px"/></a> 홈</li>
          <li style="color:#999">></li>
          <li>로그인 ▼</li>

        </ul>
        <ul class="cright">
          <li><img src="img/sub/plus.png" alt="확대"/> 확대</li>
          <li><img src="img/sub/minous.png" alt="축소"/> 축소</li>
          <li><img src="img/sub/print.png" alt="인쇄"/></li>
        </ul>
      </div>
    </section>

    <!-- login -->
			<div class="login container">
				<fieldset class="login_form">
					<legend>아이디 비밀번호 입력</legend>
          <form class="login" name="loginForm" action="database/outlet.php" method="get">
            <input type="hidden" name="outlet" value="memberlogin"/>
  					<div class="login_box">
  						<!-- 신규회원으로 한정 -->
  						<input type="hidden" name="i_sMemberType" value="aaa"/>
  						<label for="id" class="id"><img src="img/login-id.png"><input type="text" name="id" id="id" placeholder="아이디(전화번호)" autofocus /></label>
  						<label for="pin" class="pw"><img src="img/login-pw.png"><input type="password" name="pin" id="pin" onkeyup="loginBtn();" placeholder="비밀번호" /></label>
  					</div>

  					<div class="btn_login">
  						<button type="submit" style="margin:0; padding:0; background:0; border:0;"><a>로그인</a></button>
  					</div>
  					<div class="btn_box">
  						<div class="check_box">
  							<input type="checkbox" id="user_chk" name="user_chk" value="Y" title="아이디 저장">
  							<label for="user_chk"><span>아이디 저장</span></label>
  						</div>
  						<div class="btn">
  							<a href="#">아이디 찾기</a>
  							<a href="#">비밀번호 재설정</a>
  							<a href="join.php">회원가입</a>
  						</div>
  					</div>
					</form>
				</fieldset>
			</div>

		<?php
      include_once("footer.php");
    ?>
