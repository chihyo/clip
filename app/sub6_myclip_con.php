
<?php
include_once ("database/membership.php");
  // echo " member.php : ".$_GET['']."<br/>";
  $membershipcard = new membership();

  // print_r($membershipcard->membershipList());
  $xml = simplexml_load_string($membershipcard -> membershipListt($_SESSION['member']));



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
$str .= "<a class='link' href='sub_card.php?
            logo=".$row->logo."&
            category=".$row->category."&
            benefit=".$row->benefit."&
            store=".$row->store."&
            link=".$row->link."&
            name=".$row->name."
            '>";
$str .='<div class="relative">';
$str .= ' <a class="link" href="sub_card.php?
            logo='.$row->logo.'&
            category='.$row->category.'&
            benefit='.$row->benefit.'&
            store='.$row->store.'&
            link='.$row->link.'&
            name='.$row->name.'
            "><div class="dtd">';
$str .= ' <div style="background-image:url('.$row->logo.')"></div>';
$str .= ' </div></a>';
$str .= ' <div class="dtdt"></div>';
$str .= ' <div class="deletebtn"><a href="database/outlet.php?outlet=delete&member='.$_SESSION["member"].'&card='.$row[id].'">삭제</a></div>';
$str .= '</div></a>';



          // $str .= "<div class='container' style='margin:50px auto;'>";
          // $str .= "<div class='box'>";
          // $str .= "<div class='photo'><img src='".$row->logo."' style='width:140px;'/></div>";
          // $str .= "<div class='txt'>";
          // $str .= "<div class='category'>".$row->category."</div>";
          // $str .= "<div class='card_name'>".$row->name."</div>";
          // $str .= "<div class='card_benefit'>".$row->benefit."</div>";
          // if(isset($_SESSION["userId"])) {
          //   if($row->member == "") {
          //     $str .= "<div class='card_link'><a href='".$row->link."'>사이트 바로가기</a><a href='javascript:joinMemberCard(".$_SESSION["member"].",".$row['id'].")'>내카드 등록</a></div>";
          //   }else {
          //     $str .= "<div class='card_link'><a href='".$row->link."'>사이트 바로가기</a><a style='color:#ff; background:#ccc'>카드 등록 완료</a></div>";
          //   }
          // }else {
          // $str .= "<div class='card_link'><a href='".$row->link."'>사이트 바로가기</a><a href='#' onClick='alert(\"로그인 후 사용 가능합니다.\")'>내카드 등록</a></div>";
          // }
          // $str .= "</div>";
          // $str .= "</div>";
          // $str .= "</div>";



          // $str .= "<div class='box' style='width:550px'><a href='#'>";
          // $str .= "<div class='photo'><img src='".$row->logo."' style='width:300px;'/></div>";
          // $str .= "<div class='txt'>";
          // $str .= "<div class='txt_top'>".$row->membershipcard."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row->name."</div>";
          // //$xml .= "<div>".$row->description."</div>";
          // $str .= "<div class='txt_bottom'>".$row->benefit."&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;".$row->link."</div>";
          // $str .= "</div>";
          // $str .= "</a></div>";
      }
      //echo "<script>alert('$row');</script>";
    }
  }
  echo $str;
?>
