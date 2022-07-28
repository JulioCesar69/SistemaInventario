<?php require "./inc/sesion_start.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./inc/head.php";?>
</head>
<body>
    <?php 
        if(!isset($_GET['vista']) || $_GET['vista']==""){
            $_GET['vista']=="login";
        }
        if (is_file("./vistas/".$_GET['vista'].".php") && $_GET['vistas']!="login" && $_GET['vistas']!="404"){
            include "./inc/navbar.php";
            include "./vistas/".$_GET['vista'].".php";
            include "./inc/script.php";    
        } else {
            if($_GET['vista']=="login"){
                include "./vistas/login.php";
            }else{
                include "./vistas/404.php";
            }
        }
        
    ?>
</body>
</html>