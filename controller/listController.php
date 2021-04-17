<?php 
include_once '../model/listModel.php';

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
                include_once "../view/list.php";
                break;
        
            case 'destroy':
                if (isset($_GET['id'])) {
                    $id = (int)$_GET['id'];
                    $destroy = $this->list->destroy($id);
                }
               header('Location: index.php');
                break;

            case 'update':
                if (isset($_GET['id'])) {
                    $id = (int)$_GET['id'];
                    $result = $this->list->showlist($id);
                   // $result1 = $this->list->indexhang();
                    if(isset($_POST['update'])){
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $addres = $_POST['addres'];
                        $update = $this->list->update($id,$name,$phone,$email,$addres);
                        header('Location: index.php');
                     
                    }
                }
                include_once '../view/edit.php';
                break;

                case 'add':
                
                   // $result = $this->list->list();
                    if(isset($_POST['add'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $addres = $_POST['addres'];

                        if($this->list->checkid($id)){
                            // $message = "the same student code";
                            // echo "<script type='text/javascript'>alert('$message');</script>";
                            $error =$this->list->error();
                        }else{
                            $add = $this->list->add($id,$name,$phone,$email,$addres);
                            header('Location: index.php');
                        }
                        
                    }

                include_once '../view/add.php';
                break;
            default:
            break;
        }
    }
}