<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
if($_SESSION['userId'] != 'admin' && isset($_SESSION['userId'])) {
?>


<style>
  legend {
    font-size:28px !important;
    width:100%;
    height:80px;
    text-align:center;
  }

  fieldset > div {
    float:left;
  }

  .label {
    width:200px;
  }

  .label > div, .descrip > div {
    font-size:16px;
    background:#efefef;
    height:40px;
    padding:20px;
    width:160px;
    line-height: 40px;
    border-bottom:dashed 1px #ccc;
  }

  .descrip > div {
    width:350px;
    background:none;
  }

  .label > div:first-child, .descrip > div:first-child {
    border-top:solid 3px #ed1c24;
  }
  .label > div:last-child, .descrip > div:last-child {
    border-bottom:solid 3px #ed1c24;
  }



</style>
    <?php
      include_once("header.php");
    ?>
    <img src="img/sub/sub6_myclip.png" alt="회원가입">
    <section class="local_navi">
      <div class="container">
        <ul class="cleft">
          <li><a href="index.php"><img src="img/sub/home.png" alt="홈" width="17px"/></a> 홈</li>
          <li style="color:#999">></li>
          <li>마이클립 ▼</li>
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
					<legend>고객 정보</legend>
					<div class="label">
  					<div>고객명</div>
  					<div>ID(전화번호)</div>
          </div>
          <div class="descrip">
  					<div><?php echo $_SESSION['userName'] ?></div>
  					<div><?php echo $_SESSION['userId'] ?></div>
          </div>
          <div class="label">
  					<div>생년월일</div>
  					<div>성별</div>
          </div>
          <div class="descrip">
  					<div><?php echo $_SESSION['userBirth'] ?></div>
  					<div><?php
  					if($_SESSION['userGender'] == 1) {
  					  echo "남";
  					}else if($_SESSION['userGender'] == 2) {
  					  echo "여";
  					}
  					  ?>
  					</div>
          </div>

				</fieldset>
			</div>

<div class="join container"style="padding:50px 0">
  <fieldset class="joinForm">
  	<legend>내가 등록한 카드</legend>
  </fieldset>


<style>
  div.dth {
    width:1200px;
    height:70px;
    border-top:solid 3px #ed1c24;
  }
  div.dth > div {
    float:left;
    width:24.9% !important;
    padding:25px 0;
    text-align:center;
    font-size:18px;
    background:#efefef;
    border-right:dashed 1px #ccc;
  }
  div.dth > div:last-child {
    border-right:0;
  }


  div.dtd:last-child {
    border-bottom:solid 3px #ed1c24;
  }
  div.dtd:last-child div {
    border-bottom:0
  }
  div.dtd {
    width:1200px;
    height:70px;
    margin:0 !important;
  }
  div.dtd > div {
    float:left;
    width:24.9% !important;
    margin:0 !important;
    padding:25px 0;
    text-align:center;
    font-size:18px;
    border-right:dashed 1px #ccc;
    border-bottom:dashed 1px #ccc;
  }
  div.dtd > div:last-child {
    border-right:0;
  }
</style>

<div class="dth">
  <div>
    카테고리
  </div>
  <div>
    카드명
  </div>
  <div>
    사이트링크
  </div>
  <div>
    비고
  </div>
</div>
  <?php
    include "sub6_myclip_con.php";
  ?>
</div>


</fieldset>
</div>

		<?php
      include_once("footer.php");
    ?>


<?php
}else {
  echo "<script>alert('로그인 후 접속해주세요.')</script>";
  echo "<script>location.href='login.php'</script>";
}
?>




