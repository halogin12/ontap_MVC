<?php 
include_once 'model/listModel.php';

class listController extends listModel
{
    private $list;

    function __construct() 
    {
        $this->list = new listModel();
    }

    function listControl()
    {
        if(isset($_GET['method'])){
            $method = $_GET['method'];
        }else{
            $method = 'index';
        }
        switch($method){
            case 'index':
                $result = $this->list->list();
                include_once "view/list.php";
                break;

            default:
            break;
        }
    }
}