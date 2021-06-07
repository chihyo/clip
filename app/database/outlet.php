<?php
header("Content-Type: text/html; charset=UTF-8");
require ('./query.php');
require ('./member.php');

$outlet = $_REQUEST["outlet"];

// hp?outlet=memberlogin&phone=01012345678&pin=1234
switch ($outlet) {

    case  'findquestion':
        $f = new customservice();
        $f -> findquestion();

    break;

    case 'memberlogin':
        $id = $_REQUEST["id"];
        $pin = $_REQUEST["pin"];
        $m = new member();
        $result = $m->Login($id, $pin);
        if($result == true) {
            echo "<script>location.href='../myclip.php'</script>";
            //header('location:../index.php');
        }else {
            echo "<script>alert('로그인 정보가 틀렸습니다. 다시 확인하고 입력해주세요.')</script>";
            echo "<script>location.href='../index.php'</script>";
            //header('location:../login.php');
        }

    break;


    case 'memberlogout':
        session_destroy();
        echo "<script>location.href='../index.php'</script>";
    break;

    case 'memberjoin':
        $id = $_REQUEST['id'];
        $pin = $_REQUEST['pin'];
        $gender = $_REQUEST['gender'];
        $name = $_REQUEST['name'];
        $birth = $_REQUEST['birth'];
        // echo $gender;
        $m = new member();
        $m -> Join($id,$pin,$name,$gender,$birth);


        echo "<script>alert(\"회원가입이 완료되었습니다.\")</script>";
        echo "<script>location.href='../index.php'</script>";

    break;

    case 'memberList':
        $m = new member();
        $m -> memberList();

    break;


    case 'delete':
        $id = $_REQUEST["id"];
        $member = $_REQUEST["member"];
        $card = $_REQUEST["card"];

        $sql=<<<SQL
DELETE FROM `member-card`
WHERE `member`='$member' and `card`='$card'
SQL;


        $q = new query();
        $q->query($sql);
        echo "삭제완료";
        echo "<script>location.href='../myclip.php';</script>";


    break;


    case 'delete_movie':
        $title = $_REQUEST["title"];

        $sql=<<<SQL
DELETE FROM `movie`
WHERE `movie_title`='$title'
SQL;


        $q = new query();
        $q->query($sql);
        echo $title;
        echo "삭제완료";
        // echo "<script>location.href='../admin/index.php?stance=movie';</script>";


    break;


    case 'joinMemberCard':
        $member = $_REQUEST["member"];
        $card = $_REQUEST["card"];
        $cmember = new member();
        $cmember->joinMemberCard($member, $card);
    break;

    default:
        // code...
        break;


}