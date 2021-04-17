<?php


class createModel extends Connect
{
    function __construct()
    {
        parent::__construct();
    }
    function add($inputName,$inputEmail,$inputPassword)
    {
        $sql = "INSERT INTO login(name,email,password) VALUES (:inputName,:inputEmail,:inputPassword)";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(":inputName",$inputName);
        $pre->bindParam(":inputEmail",$inputEmail);
        $pre->bindParam(":inputPassword",$inputPassword);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    function error()
    {
        $message = "bị trùng rồi kìa";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
 
    function checkname($inputName)
    {
        $sql = "SELECT name FROM login WHERE name=:name";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':name', $inputName);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
}