<?php
include "./database/query.php";
include "./database/customservice.php";


  // echo " member.php : ".$_GET['grd']."<br/>";
  $customservice = new customservice();
  // print_r($customservice->findquestion());

    $xml = simplexml_load_string($customservice->findquestion());

  // echo " 마지막 받아오는member.php : ".$grd."<br/>";


  $str='';
  if ($xml === false) {
      echo "Failed loading XML: ";
      foreach(libxml_get_errors() as $error) {
          echo "<br>", $error->message;
      }
  } else {
    if (is_object($xml)) {
        foreach($xml as $row){
        // echo $row->name . "<br>";
        $str .= "<div class='accordionwrap'>";
        $str .= "<div class='accordion tr container'>";
        $str .= "<div class='no'>".$row->no."</div>";
        $str .= "<div class='category'>".$row->category."</div>";
        $str .= "<div class='detail'>".$row->detail."</div>";
        $str .= "<div class='cs_title'>".$row->title."</div>";
        $str .= "</div>";
        $str .= "<div class='panel container'><span style='color:#ed1c24;font-size:20px;'>→ </span>". $row->description;
        $str .= "</div></div>";
        // }

      }

      //echo "<script>alert('$row');</script>";
    }
  }
?>

    <?php
      include_once("header.php");
    ?>

    <img src="img/sub/cs_bg.png" alt="고객센터">
    <section class="local_navi">
      <div class="container">
        <ul class="cleft">
          <li><a href="index.php"><img src="img/sub/home.png" alt="홈" width="17px"/></a> 홈</li>
          <li style="color:#999">></li>
          <li>고객센터 ▼</li>
        </ul>
        <ul class="cright">
          <li><img src="img/sub/plus.png" alt="확대"/> 확대</li>
          <li><img src="img/sub/minous.png" alt="축소"/> 축소</li>
          <li><img src="img/sub/print.png" alt="인쇄"/></li>
        </ul>
      </div>
    </section>


    <div class="tabs" style="clear:both;">
      <ul class="tab-title">
          <li class="active le"><a href="#ntab1">자주 찾는 질문</a></li>
          <li class="me"><a href="#ntab2">공지사항</a></li>
          <li class="ri"><a href="#ntab3">1:1 상담센터</a></li>
      </ul>

      <div class="tab-cont">
        <div id="ntab1" class="ntab1">
          <p>고객들께서 궁금해 하시는 질문 중 자주하시는 질문을 모아놓았습니다.</p>
          <div class="arccodionwrap">
          <div class="th container">
            <div class="no">No</div>
            <div class="category">구분</div>
            <div class="detail">상세카테고리</div>
            <div class="cs_title">제목</div>
          </div>
          </div>
          <?php
          echo $str;
          ?>

        </div>
        <div id="ntab2" class="ntab2 hidden">
          <p>카드별 이벤트를 확인하세요.</p>

        </div>
        <div id="ntab3" class="ntab3 hidden">
          <p>매장별 이벤트를 확인하세요.</p>

        </div>
      </div>
    </div>

<script>
// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//     acc[i].onclick = function(){
//         this.classList.toggle("active");
//         var panel = this.nextElementSibling;
//         if (panel.style.display === "block") {
//             panel.style.display = "none";
//         } else {
//             panel.style.display = "block";
//         }
//     }
// }


$(document).ready(function() {
  $('div.accordion').on('click',function() {
    $(this).parent().find('div.panel').slideToggle("slow");
  })
})
</script>


		<?php
      include_once("footer.php");
    ?>
