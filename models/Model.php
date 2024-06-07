<?php

class Model
{
    private function getCon()
    {
        static $cn;
        if (!$cn) $cn = new PDO("mysql:host=localhost,dbname=reservation", "root", "password");
        return $cn;

    }

    function idPossible($reservation)
    {
        $query = "select count(*) from sales where idSale=? and thedate=? and etats='Active' ";
        $rq = $this->getCon()->prepare($query);
        $rq->execute([$reservation["id"], $reservation["date"]]);
        return !$rq->fetchColumn();
    }

}

