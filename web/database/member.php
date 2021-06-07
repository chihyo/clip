<?php
session_start();


class member
{
    public function __construct()
    {
    }

    //xml 기본셋팅
    public $xmlDefault='<?xml version="1.0" encoding="utf-8"?>';
    public $id;
    public $pin;
    public $gender;
    public $birthdate;
    public $name;
    public $phone;


    public function memberList(){
            $sql=<<<SQL
SELECT `member`, `id`, `name`, `pin`, `birthdate`, `gender`, `point`, `membershipcard`, `cashcard`, `coupon`, `market` FROM `member` WHERE 1
SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
    <member id="{$row->member}">
        <id>{$row->id}</id>
        <name>{$row->name}</name>
        <pin>{$row->pin}</pin>
        <birthdate>{$row->birthdate}</birthdate>
        <gender>{$row->gender}</gender>
        <point>{$row->point}</point>
        <membershipcard>{$row->membershipcard}</membershipcard>
        <cashcard>{$row->cashcard}</cashcard>
        <coupon>{$row->coupon}</coupon>
        <market>{$row->market}</market>
    </member>
XML;
    }
    $xml = $this->xmlDefault."<members>".$xml."</members>";

    if ($xml == "") {
        $xml=<<<XML
<?xml version="1.0" charset="utf-8"?>
<result>
    <login>false</login>
</result>
XML;
    }
    // echo $xml;
    return $xml;
    }



    public function Login($id,$pin){
        $sql=<<<SQL
SELECT *
FROM  `member`
WHERE  `id` = '{$id}'
AND  `pin` = '{$pin}'
SQL;

        $q = new query();
        $RecordSet =
            $q->query($sql);

        $xml = "";
        while  ($row=$RecordSet->fetch_object()){
            $xml.=<<<XML
<?xml version="1.0" charset="utf-8"?>
<result>
    <login>true</login>
    <name>{$row->name}</name>
</result>
XML;
            $_SESSION['member'] = $row->member;
            $_SESSION['userId'] = $row->id;
            $_SESSION['userPin'] = $row->pin;
            $_SESSION['userName'] = $row->name;
            $_SESSION['userGender'] = $row->gender;
            $_SESSION['userBirth'] = $row->birthdate;

        }
        if ($xml == "") {
            $xml=<<<XML
<?xml version="1.0" charset="utf-8"?>
<result>
    <login>false</login>
</result>
XML;
            return false;
        }else{
            return true;
        }
        echo $xml;
    }



    public function Join($id,$pin,$name,$gender,$birth) {


    /**
    * 사용자 가입
    * @param void $name
    * @param void $mobile
    * @param void $pin
    * @param void $address
    * @param void $point
    * @param void $grade
    */
        $sql=<<<SQL
INSERT INTO `member`(`member`, `id`, `name`, `pin`, `birthdate`, `gender`, `point`, `membershipcard`, `cashcard`, `coupon`, `market`)
VALUES ('','{$id}','{$name}','{$pin}','{$birth}','{$gender}','','','','','')
SQL;
        $q = new query();
        $q->query($sql);
        echo "member : ".$id."<br/>";
        //echo $count;
        echo "<script>location.href='../login.php'</script>";
    }




    public function joinMemberCard($member, $card){
        $sql=<<<SQL
INSERT INTO  `member-card` (
`member` ,
`card` ,
`regtime`
)
VALUES ( '{$member}',  '{$card}',
CURRENT_TIMESTAMP);
SQL;
        $q = new query();
        $RecordSet =
            $q->query($sql);

        $xml = "";
            $xml.=<<<XML
<?xml version="1.0" charset="utf-8"?>
<result>
    <membercard>true</membercard>
</result>
XML;
        echo $xml;
        return $xml;
    }


}

?>