<?php 
include_once 'model/loginModel.php';

class loginController extends loginModel
{
    private $login;
    function __construct()
    {
        $this->login = new loginModel();
        
    }
    function logincontrol()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        }else{
            $method = 'index';
        }
        switch ($method) {
            case 'index': 
                
                if(isset($_POST['login'])){
                    $inputName = $_POST['inputName'];
                    $inputPassword = $_POST['inputPassword'];

                    if ($this->login->login($inputName,$inputPassword)) {			
                       /* if ($this->login->checkLogin($inputName)){
                            
                        }*/
                        header('Location: http://localhost/ontap_MVC/admin/index.php');
                    } else {
                        $message = "Thông tin đăng nhập chưa đúng";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
                include_once 'view/login.php';
                break; 

            
            default:
                # code...
                break;
        }
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