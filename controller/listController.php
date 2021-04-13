<?php 
include_once 'model/listModel.php';

class listController extends listModel
{
    private $nhanvien;

    function __construct() 
    {
        $this->nhanvien = new listModel();
    }

    function list()
    {
        if(isset($_GET['method'])){
            $method = $_GET['method'];
        }else{
            $method = 'list';
        }
        switch($method){
            case 'list':
                $result = $this->nhanvien->list();
                include_once "view/list.php";
                break;

            default:
            break;
        }
    }
}