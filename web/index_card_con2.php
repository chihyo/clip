
<?php
include_once ("database/membership.php");
  // echo " member.php : ".$_GET['']."<br/>";



function Indexcard() {

  $membershipcard = new membership();

  // print_r($membershipcard->membershipListwhere());

  $xml = simplexml_load_string($membershipcard -> membershipListwhere());


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

          $str .= "<a href='sub5_membershipcard.php'><li class='card_list left'style='margin-left:55px;'>";
          $str .= "<div class='card_img'><img src='".$row->logo."'/></div>";
          $str .= "<div>";
          $str .= "<h2 class='card_title'>".$row->name."</h2>";
          $str .= "<p class='card_desc' style='height:40px; line-height:1.5em; overflow:hidden;'>".$row->benefit."</p>";
          $str .= "</div>";
          $str .= "</li></a>";



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
  return $str;
}
?>