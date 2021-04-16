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
}
