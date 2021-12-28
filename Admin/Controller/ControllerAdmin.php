<?php
include '../../util/Regex.php';

class ControllerAdmin
{
    public static function responseAdminHome($admin)
    {
        if ($admin != null) {
            session_start();
            $_SESSION['admin'] = $admin;
            header("Location:./ControllerPage.php?page=home");
        } else {
            header('Location:../view/index.php?errorLogin=1');
        }
    }
}





//method get
if(!empty($_GET['action'])){
    $page=$_GET['action'];
    switch ($page){
        case 'logout' :
            session_destroy();
            header('Location: ../../index.php');
            break;
        default:
            break;
    }
}


//method post
if (sizeof($_POST)>0 && $_POST['action']!=null){
    $action = $_POST['action'];
    switch ($action){
        case 'login':
            $username = $_POST['username'];
            $password = $_POST['password'];
            if(true){
                include_once "../Model/ModelAdmin.php";
                $modelAdmin = new ModelAdmin();
                $admin = $modelAdmin->checkLogin($username,$password);
                ControllerAdmin::responseAdminHome($admin);
            }
            break;
        case 'register':
            echo 'register';
            break;
        default:
            break;
    }
}



