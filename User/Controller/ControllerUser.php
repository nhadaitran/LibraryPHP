<?php
include '../../util/Regex.php';

class ControllerUser
{
    public static function responseHomePage($user)
    {
        if ($user != null) {
            session_start();
            $_SESSION['user'] = $user;
            header("Location:./ControllerPage.php?page=home");
        } else {
            header('Location:../view/login.php?error=1');
        }
    }
}

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
                $user = $modelUser->checkLogin($username, $password);
                ControllerUser::responseHomePage($user);
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
                if ($modelUser->checkRegister($username, $email) == true) {
                    if ($modelUser->insertUser($username, $name, $email, $password) == true) {
                        $user = $modelUser->checkLogin($username, $password);
                    }
                } else {
                    ControllerUser::responseHomePage(null);    
                }
                ControllerUser::responseHomePage($user);
            }
            break;
        default:
            break;
    }
}
