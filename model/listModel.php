<?php


class listModel extends Connect
{
    function __construct()
    {
        parent::__construct();
    }
     function list()
    {
        $result = array();
        $sql = "SELECT * FROM students ";
      
        $pre = $this->pdo->prepare($sql);
		$pre->execute();
		return $pre ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function destroy($id){
        $sql = "DELETE FROM students WHERE id = $id";
        $pre = $this->pdo->prepare($sql);
		$pre->execute();
		return $pre ->fetchAll(PDO::FETCH_ASSOC);
    }

    function showlist($id)
    {
        $sql = "SELECT * FROM students WHERE id = $id";

        $pre = $this->pdo->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    function update($id,$name,$phone,$email,$addres)
    {
        $sql = "UPDATE students SET name=:name,phone=:phone,email=:email,addres=:addres WHERE id= $id";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':name', $name);
        $pre->bindParam(':phone', $phone);
        $pre->bindParam(':email', $email);
        $pre->bindParam(':addres', $addres);

        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    function checkid($id)
    {
        $sql = "SELECT id FROM students WHERE id=:id";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    function add($id,$name,$phone,$email,$addres)
    {
        $sql = "INSERT INTO students(id, name, phone, email, addres) VALUES (:id, :name, :phone, :email, :addres)";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->bindParam(':name', $name);
        $pre->bindParam(':phone', $phone);
        $pre->bindParam(':email', $email);
        $pre->bindParam(':addres', $addres);
    
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    function error()
    {
        $message = "bị trùng rồi kìa";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    /*
    function checknull($id)
    {
        $sql = "SELECT id FROM students WHERE id= $id";

    }
    */
}
