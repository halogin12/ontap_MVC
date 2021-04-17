<?php 
    include_once "config/myconnect.php";
    include_once "layout/header.php";  ?>

     
    <?php   
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }else{
            $page = 'login';
        }

        switch ($page) {
            case 'register':
                include_once 'controller/createController.php';
                $create = new createController();
                $create->createcontrol();
                break;

            case 'login':
                include_once 'controller/loginController.php';
                $login = new loginController();
                $login->logincontrol();
                break;

            // case 'list':
            //     include_once 'controller/listController.php';
            //     $nhanvien = new listController();
            //     $nhanvien->listControl();
            //     break;
            
            default:
                echo "<h2 style='color: red;'>ERROR 404, trang không tồn tại</h2><a href='index.php'>Quay lại</a>";
                break;
        }

    ?>

<?php include_once "layout/footer.php";?>
