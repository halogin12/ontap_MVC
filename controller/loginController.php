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
                        
                        header('Location: http://localhost/ontap_MVC/admin/index.php');
                    } else {
                        $message = "Thông tin đăng nhập chưa đúng";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
                include_once 'view/login.php';
                break; 

            // case 'create':
            //     include_once '../view/insert.php';
            //     break; 
            default:
                # code...
                break;
        }
    }

  

}