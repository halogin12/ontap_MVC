<?php


class loginModel extends Connect
{
    function __construct()
    {
        parent::__construct();
    }
    function login($inputName, $inputPassword)
    {
    
        $sql = "SELECT * FROM login WHERE name =:inputName AND  password =:inputPassword";
      
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(":inputName", $inputName);
        $pre->bindParam(":inputPassword", $inputPassword); 
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function checkLogin($inputName)
    {
        $sql = "SELECT admin FROM login WHERE admin =1";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':name', $inputName);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
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

    function success()
    {
        $message = "đăng lí thành công";
        echo "<script type='text/javascript'>alert('$message');</script>";
        
        //confirm('Bạn có chắc chắn muốn xóa học viên?');
    }

    
  
}