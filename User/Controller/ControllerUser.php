<?php
include '../../util/Regex.php';

//method get
if(!empty($_GET['action'])){
    $page=$_GET['action'];
    switch ($page){
        case 'logout' :
            session_destroy();
            header('Location: ../view/login.php');
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
                include_once "../Model/ModelUser.php";
                $modelUser=new ModelUser();
                $User=$modelUser->checkLogin($username,$password);
                responseHomePage($User);
            }
            break;
        case 'register':
            echo 'register';
            break;
        default:
            break;
    }
}
function responseHomePage($User){
    if($User!=null){
       session_start();
        $_SESSION['user']=$User;
        header("Location:./ControllerPage.php?page=home");


    }else{
        header('Location:../view/login.php?errorLogin=1');
    }
}