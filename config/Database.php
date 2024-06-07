<?php
class Database
{
    private $host = "localhost";
    private $dbname = "reservation";
    private $user = "root";
    private $password = "";

    public $cn;

    public function getCon()
    {
        $this->cn = null;
        try {
            $this->cn = new PDO("mysql:host=$this->host,dbname=$this->dbname", $this->user, $this->password);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
        return $this->cn;
    }
}
