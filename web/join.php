    <style>
      legend {
        font-size:24px !important;
        width:100%;
        height:80px;
        text-align:center;

      }

      .joinForm {
        width:100%;
        margin:60px auto;
      }

      .joinForm div {
      	width:100%;
      	height:80px;
      	border-bottom:dashed 1px #ccc;
      }

      .joinForm .bt {
      	border-top:solid 3px #f00;
      }
      .joinForm .bb {
      	border-bottom:solid 3px #f00;
      }

      .name, .birth, .gender, .id, .pin {
      	display:inline-block;
			width:200px;
			padding:20px;
			font-size:16px;
			line-height:2.5em;
			height:40px;
			background:#efefef;
			color:#000;
      }

      input[type="text"],input[type="password"] {
      	margin-left:40px;
      	width:400px;
      	height:60px;
      	padding:10px;
				border: 1px solid #ccc;
		    border-radius: 4px;
      }

      input[type=text]:focus,input[type=password]:focus {
		    background-color: lightblue;
			}

      input[type="radio"] {
      	margin-left:50px;
      	padding:10px;
      }

      .divbutton {
      	margin-top:30px;
      	width:100%;
      	height:50px;
      	border:none !important;
      	text-align:center;
      }
      button {
      	width:200px;
		height:50px;
		background:#efefef;
		border:none;
      }



    </style>
    <?php
      include_once("header.php");
    ?>

    <img src="img/sub/sub_header_join.jpg" alt="회원가입">
		<section class="local_navi">
      <div class="container">
        <ul class="cleft">
          <li><a href="index.php"><img src="img/sub/home.png" alt="홈" width="17px"/></a> 홈</li>
          <li style="color:#999">></li>
          <li>회원가입 ▼</li>
        </ul>
        <ul class="cright">
          <li><img src="img/sub/plus.png" alt="확대"/> 확대</li>
          <li><img src="img/sub/minous.png" alt="축소"/> 축소</li>
          <li><img src="img/sub/print.png" alt="인쇄"/></li>
        </ul>
      </div>
    </section>

    <!-- join -->
			<div class="join container"style="padding:50px 0">
				<fieldset class="joinForm">
					<legend>회원가입</legend>
          <form class="join" name="joinForm" action="database/outlet.php" method="post" onsubmit="return checkJoin(joinForm)">
	          <input type="hidden" name="outlet" value="memberjoin"/>
	          <!--<input type="hidden" name="reservation" value="0"/>-->
							<div class="bt">
							<label class="name" for="name">이름</label>
							<input type="text" id="name" name="name" placeholder="이름">
							</div>
							<div>
							<label class="birth" for="birth">생년월일</label>
							<input type="text" id="birth" name="birth" placeholder="생년월일을 6자리로입력하세요.">
							</div>
							<div>
							<label class="gender" for="gender">성별</label>
			                <input type="radio" name="gender" value="1" checked>남
			                <input type="radio" name="gender" value="2">여
							</div>
							<div>
							<label class="id" for="id">아이디(전화번호)</label>
							<input type="text" id="id" name="id" placeholder="아이디 : 본인의 휴대폰번호를 입력하세요(01012345678)">
							</div>
							<div>
							<label class="pin" for="pin">비밀번호</label>
							<input type="password" id="pin" name="pin" placeholder="패스워드 : 숫자 6~18자리를 사용해야 합니다.">
							</div>
							<div class="bb">
							<label class="pin" for="pin2">비밀번호확인</label>
							<input type="password" id="pin2" name="pin2" placeholder="위 입력한 패스워드와 동일하게 입력하세요.">
							</div>
							<div class="divbutton">
							<button type="button" onclick="checkJoin(joinForm)" style="background:#f00; color:#fff">가입하기</button>
		          <button type="button" onclick="location.href='index.php'">Cancel</button>
							</div>
					</form>

				</fieldset>
			</div>

		<?php
      include_once("footer.php");
    ?>
