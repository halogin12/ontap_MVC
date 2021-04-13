<?php   

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }else{
            $page = 'list';
        }

        switch ($page) {
            case 'list':
                include_once '../controller/listController.php';
                $nhanvien = new listController();
                $nhanvien->list();
                break;

            
            default:
                echo "<h2 style='color: red;'>ERROR 404, trang không tồn tại</h2><a href='index.php'>Quay lại</a>";
                break;
        }

    ?>