<?php
include_once ("database/membership.php");
  // echo " member.php : ".$_GET['']."<br/>";
  $membershipcard = new membership();

  // print_r($membershipcard->membershipList($_SESSION['member']));
  $xml = simplexml_load_string($membershipcard -> membershipList($_SESSION['member']));



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
          
            $str .= "<div class='membership-item'>";
              $str .= "<div class='cardtitle'>";
                $str .= "<div class='name'>".$row->name."</div>";
                $str .= "<div class='category'>".$row->category."</div>";
              $str .= "</div>";
              $str .= "<div class='cardimg'><img src='".$row->logo."' style='width:80%; padding:12% 10%;'/></div>";
              $str .= "<div class='cardbenefit' style='padding:3% 2%'>".$row->benefit."</div>";
              $str .= "<div class='carddown'><a href='javascript:joinMemberCard(".$_SESSION["member"].",".$row['id'].")'><img src='img/down.png' width='50%' style='padding-top:35%; padding-left:15%'></a></div>";
            $str .= "<a class='link' href='sub_card.php?
            logo=".$row->logo."&
            category=".$row->category."&
            benefit=".$row->benefit."&
            store=".$row->store."&
            link=".$row->link."&
            name=".$row->name."
            '>asd</a>";
            $str .= "</div>";
            



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

<div class='membership-ite'>
</div>
