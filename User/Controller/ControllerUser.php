<?php
include '../../util/Regex.php';

//method get
if (!empty($_GET['action'])) {
    $page = $_GET['action'];
    switch ($page) {
        case 'logout':
            session_destroy();
            header('Location: ../view/login.php');
            break;
        default:
            break;
    }
}

if (sizeof($_POST) > 0 && $_POST['action'] != null) {
    $action = $_POST['action'];
    switch ($action) {
        case 'login':
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (true) {
                include_once "../Model/ModelUser.php";
                $modelUser = new ModelUser();
                $User = $modelUser->checkLogin($username, $password);
                if ($User == null) {
                    $User = "login";
                }
                responseHomePage($User);
            }
            break;
        case 'register':
            $username = $_POST['username'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (true) {
                include_once "../Model/ModelUser.php";
                $modelUser = new ModelUser();                
                if ($modelUser->checkRegister($username, $email)==true) {
                    if ($modelUser->insertUser($username, $name, $email, $password)==true) {
                        $User = $modelUser->checkLogin($username, $password);
                    }
                }else{
                    $User = "register_failed";
                }
                responseHomePage($User);
            }
            break;
        default:
            break;
    }
}
function responseHomePage($User)
{
    switch ($User) {
        case 'login':
            header('Location:../view/login.php?error=1');
            break;        
        case 'register_failed':
            header('Location:../view/register.php?error=1');
            break;
        default:
            session_start();
            $_SESSION['user'] = $User;
            header("Location:./ControllerPage.php?page=home");
            break;
    }
}
