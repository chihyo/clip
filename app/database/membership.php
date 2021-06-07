
<style>

  .container > .box {
    float:left;
    width:580px;
    height:260px;
    border:solid 1px #ccc;
    border-radius:5px;
    margin:30px 18px 30px 0;
  }

  .container > .box > div {
    float:left;
  }

  .box > .photo {
    float:left;
    width:140px;
    padding:30px;
    margin:45px 0 ;
  }
  .box .txt {
    float:right;
    width:360px;
    height:80px;
    padding:0 10px;
    text-align:left;
  }
  .category {
    margin-top:30px;
    margin-bottom:10px;
  }
  .card_name {
    font-size:24px;
    font-weight:600;
  }
  .card_benefit {
    font-size:14px;
    width:345px;
    height:100px;
    margin-top:10px;
    overflow:hidden;
    line-height:2.3em;
  }
  .card_link > a {
    font-size:14px;
    display:inline-block;
    border:solid 1px #ccc;
    padding:10px 0;
    margin-right:10px;
    text-align:center;
    width:45%;
    margin-top:10px;
  }
</style>

<?php
// header("Content-Type: text/html; charset=UTF-8");
session_start();
include_once('query.php');




class membership {
    public function __construct()
    {
    }

    //xml 기본셋팅
    public $xmlDefault='<?xml version="1.0" encoding="utf-8"?>';
    // public $membershipcard;
    // public $logo;
    // public $name;
    // public $category;
    // public $benefit;
    // public $store;
    // public $link;
    // public $use;







public function membershipListt($member){
            $sql=<<<SQL
SELECT distinct `member`, `card`,

`membershipcard`, `logo`, `name`, `category`, `benefit`, `store`, `link`, `use` FROM `member-card`
  right outer join `membershipcard` on `member-card`.card=`membershipcard`.`membershipcard`
 where `member-card`.member={$member}


SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
    <membership id="{$row->membershipcard}">
        <member>{$row->member}</member>
        <logo>{$row->logo}</logo>
        <name>{$row->name}</name>
        <category>{$row->category}</category>
        <benefit>{$row->benefit}</benefit>
        <store>{$row->store}</store>
        <link>{$row->link}</link>
        <use>{$row->use}</use>

    </membership>
XML;

    }
    $xml = $this->xmlDefault."<memberships>".$xml."</memberships>";

    // echo $xml;
    return $xml;
    }








    public function membershipList($member){
            $sql=<<<SQL
SELECT distinct `member`, `card`,
`membershipcard`, `logo`, `name`, `category`, `benefit`, `store`, `link`, `use` FROM ( SELECT `member`, `card` from `member-card` where `member-card`.member={$member}) as `member-card`
  right outer join `membershipcard` on `member-card`.card=`membershipcard`.`membershipcard`


SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
    <membership id="{$row->membershipcard}">
        <member>{$row->member}</member>
        <logo>{$row->logo}</logo>
        <name>{$row->name}</name>
        <category>{$row->category}</category>
        <benefit>{$row->benefit}</benefit>
        <store>{$row->store}</store>
        <link>{$row->link}</link>
        <use>{$row->use}</use>

    </membership>
XML;
    $_SESSION['cdname'] = $row->name;
    }
    $xml = $this->xmlDefault."<memberships>".$xml."</memberships>";

    // echo $xml;
    return $xml;
    }

public function membershipListwhere2(){
            $sql=<<<SQL
SELECT `membershipcard`, `logo`, `name`, `category`, `benefit`, `store`, `link`, `use`
FROM `membershipcard`
SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
    <membership id="{$row->membershipcard}">
        <logo>{$row->logo}</logo>
        <name>{$row->name}</name>
        <category>{$row->category}</category>
        <benefit>{$row->benefit}</benefit>
        <store>{$row->store}</store>
        <link>{$row->link}</link>
        <use>{$row->use}</use>
    </membership>
XML;
    }
    $xml = $this->xmlDefault."<memberships>".$xml."</memberships>";

    // echo $xml;
    return $xml;
    }


        public function membershipListwhere(){
            $sql=<<<SQL
SELECT `membershipcard`, `logo`, `name`, `category`, `benefit`, `store`, `link`, `use`
FROM `membershipcard` LIMIT 4
SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
    <membership id="{$row->membershipcard}">
        <logo>{$row->logo}</logo>
        <name>{$row->name}</name>
        <category>{$row->category}</category>
        <benefit>{$row->benefit}</benefit>
        <store>{$row->store}</store>
        <link>{$row->link}</link>
        <use>{$row->use}</use>
    </membership>
XML;
    }
    $xml = $this->xmlDefault."<memberships>".$xml."</memberships>";

    // echo $xml;
    return $xml;
    }




        public function membershipListdesc(){
            $sql=<<<SQL
SELECT `membershipcard`, `logo`, `name`, `category`, `benefit`, `store`, `link`, `use`
FROM `membershipcard` ORDER BY `membershipcard` DESC LIMIT 4


SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
    <membership id="{$row->membershipcard}">
        <logo>{$row->logo}</logo>
        <name>{$row->name}</name>
        <category>{$row->category}</category>
        <benefit>{$row->benefit}</benefit>
        <store>{$row->store}</store>
        <link>{$row->link}</link>
        <use>{$row->use}</use>

    </membership>
XML;
    }
    $xml = $this->xmlDefault."<memberships>".$xml."</memberships>";

    // echo $xml;
    return $xml;
    }




}

?>