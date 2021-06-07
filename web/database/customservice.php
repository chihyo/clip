<?php


class customservice
{
    public function __construct()
    {
    }

    //xml 기본셋팅
    public $xmlDefault='<?xml version="1.0" encoding="utf-8"?>';
    public $no;
    public $category;
    public $detail;
    public $title;
    public $description;


    public function findquestion(){
            $sql=<<<SQL
SELECT `no`, `category`, `detail`, `title`, `description`
FROM `findquestion`
SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
    <findquestion id="{$row->no}">
        <no>{$row->no}</no>
        <category>{$row->category}</category>
        <detail>{$row->detail}</detail>
        <title>{$row->title}</title>
        <description>{$row->description}</description>
    </findquestion>
XML;
    }
    $xml = $this->xmlDefault."<findquestions>".$xml."</findquestions>";

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



}

?>