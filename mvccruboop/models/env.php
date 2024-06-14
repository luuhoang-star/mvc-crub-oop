<?php
class env
{
    public $DBNAME ;
    public $DBUSER ;
    public $DBPASS ;
    public $DBHOST ;
    public $DBCHARSET;

    public function getConnect()
    {
        $connect = new PDO("mysql:host=".$this->DBHOST.";dbname=".$this->DBNAME
            .";charset=".$this->DBCHARSET, $this->DBUSER, $this->DBPASS);
        return $connect;
    }
}
