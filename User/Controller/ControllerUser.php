<?php
include '../../util/Regex.php';

class ControllerUser
{
    public static function responseHomePage($user)
    {
        if ($user == null) {
            header('Location:../view/login.php?error=1');
        } else if ($user == -1) {
            header('Location:../view/register.php?error=1');
        } else {
            session_start();
            $_SESSION['user'] = $user;
            header("Location:./ControllerPage.php?page=home");
        }
    }
    public static function responseAdminHome($admin)
    {
        if ($admin != null) {
            session_start();
            $_SESSION['admin'] = $admin;
            header("Location:../../Admin/Controller/ControllerPage.php?page=home");
        } else {
            header('Location:../view/index.php?errorLogin=1');
        }
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
                include_once "../Model/ModelAdmin.php";
                $modelAdmin = new ModelAdmin();
                $user = $modelAdmin->checkLogin($username, $password);
                if ($user != null) {
                    ControllerUser::responseAdminHome($user);
                } else {
                    $user = $modelUser->checkLogin($username, $password);
                    ControllerUser::responseHomePage($user);
                }
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
                    ControllerUser::responseHomePage($user = -1);
                }
                ControllerUser::responseHomePage($user);
            }
            break;
            case 'update':
                $name = $_POST['name'];
                $email = $_POST['email'];
                $old_password = $_POST['old_password'];
                $new_password = $_POST['new_password'];
                if (true) {
                    include_once "../Model/ModelUser.php";
                    $modelUser = new ModelUser();
                    if ($modelUser->checkRegister($username, $email) == true) {
                        if ($modelUser->insertUser($username, $name, $email, $password) == true) {
                            $user = $modelUser->checkLogin($username, $password);
                        }
                    } else {
                        ControllerUser::responseHomePage($user = -1);
                    }
                    ControllerUser::responseHomePage($user);
                }
                break;
        default:
            break;
    }
}
