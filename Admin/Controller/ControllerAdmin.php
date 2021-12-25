<?php
include '../../util/Regex.php';

//method get
if(!empty($_GET['action'])){
    $page=$_GET['action'];
    switch ($page){
        case 'logout' :
            session_destroy();
            header('Location: ../view/index.php');
            break;
        default:
            break;
    }
}
//method post
if (sizeof($_POST)>0 && $_POST['action']!=null){
    $action=$_POST['action'];
    switch ($action){
        case 'login':
            $username=$_POST['username'];
            $password=$_POST['password'];
            if(true){
                include_once "../Model/ModelAdmin.php";
                $modelAdmin=new ModelAdmin();
                $Admin=$modelAdmin->checkLogin($username,$password);
                responseAdminHome($Admin);
            }
            break;
        case 'register':
            echo 'register';
            break;
        default:
            break;
    }
}
function responseAdminHome($Admin){
    if($Admin!=null){
       session_start();
//        $_SESSION['admin']=$Admin;
//        include_once "../view/home.php";
        $_SESSION['admin']=$Admin;
        header("Location:./ControllerPage.php?page=home");


    }else{
        header('Location:../view/index.php?errorLogin=1');
    }

}



