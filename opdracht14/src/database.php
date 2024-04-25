<?php

require_once("../config/config.php");

Class Database 
{

    private $connectie;


    public function __construct() {
        $this->connectie = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    }

    public function voerQueryUit($query)
    {
        $result = $this->connectie->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    
    // public function insertQuery($query)
    // {
    //     $result = $this->connectie->insertQuery($query)
    //     return $result
    // }

    public function sluitVerbinding()
    {
        $this->connectie = null;
    }

    public function testVerbdining()
    {
        return (bool) $this->connectie;
    }

    public function __destruct()
    {
        $this->sluitVerbinding();
    }
}

?>