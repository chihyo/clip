<?php

class query {
    public function __construct()
    {
    }

    public $dbHost = "localhost";
    public $dbID = "root";
    public $dbPin = "";
    public $dbCatalog = "member";

    public function query($query)
    {
        $db=new mysqli($this->dbHost,
                    $this->dbID,
                    $this->dbPin,
                    $this->dbCatalog
                    );
        $db->query("set session character_set_connection=utf8;");
        $db->query("set session character_set_results=utf8;");
        $db->query("set session character_set_client=utf8;");
        if(mysqli_connect_error()) {
            exit('connection error'.mysql_connect_error);
        }else {
            //echo $mysqli->stat;
        }
        return $db->query($query);
    }
}
