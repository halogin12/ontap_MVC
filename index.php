<?php 
    include_once "config/myconnect.php";
    include_once "layout/header.php";  ?>
<title>Document</title>
</head>
<body>
     
    <?php   
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }else{
            $page = 'login';
        }

        switch ($page) {
            case 'register':
                include_once 'view/register.php';
                break;

            case 'login':
                include_once 'controller/loginController.php';
                $login = new loginController();
                $login->logincontrol();
                break;
            
            
            default:
                echo "<h2 style='color: red;'>ERROR 404, trang không tồn tại</h2><a href='index.php'>Quay lại</a>";
                break;
        }

    ?>

<?php include_once "layout/script.php";?>
</body>
</html>