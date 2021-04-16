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

 
  
}