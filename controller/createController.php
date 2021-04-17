<?php 
include_once 'model/createModel.php';

class createController extends createModel
{
    private $login;
    function __construct()
    {
        $this->login = new createModel();
        
    }
    function createcontrol()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        }else{
            $method = 'register';
        }
        switch ($method) {
            case 'register':
                if(isset($_POST['button_registerr'])){
                    
                    $inputName = $_POST['inputName'];
                    $inputEmail = $_POST['inputEmail'];
                    $inputPassword = $_POST['inputPassword'];
                    if($this->login->checkname($inputName)){
                        // $message = "the same student code";
                        // echo "<script type='text/javascript'>alert('$message');</script>";
                        $error =$this->login->error();
                    }else{
                        $add = $this->login->add($inputName,$inputEmail,$inputPassword);
                        $success = $this->login->success();
                    }
                    
                }
                else if(isset($_POST['button_login'])){
                    header('Location: index.php');
                }

                include_once 'view/register.php';
                break;

            
                default:
                # code...
                break;
        }
    }

}