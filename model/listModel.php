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
        $sql = "SELECT * FROM nhanvien ";
      
        $pre = $this->pdo->prepare($sql);
		$pre->execute();
		return $pre ->fetchAll(PDO::FETCH_ASSOC);
    }

}
