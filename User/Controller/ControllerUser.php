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
        } else if ($user['lock']=='1'){
            header('Location:../view/login.php?error=2');
        }else {
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
    public static function updateUserInfo($user)
    {
        $error = [];
        $data = [];
        $new_password = null;
        if ($_POST['confirm_password'] != "" && $_POST['new_password'] != "" || $_POST['confirm_password'] != null && $_POST['new_password'] != null) {
            if ($_POST['confirm_password'] == $_POST['new_password']) {
                $new_password = $_POST['new_password'];
            } else {
                $new_password = -1;
                $error['confirm_password'] = "Mật khẩu xác nhận không giống nhau";
            }
        }
        include_once "../Model/ModelUser.php";
        $modelUser = new ModelUser();
        $old_password = $_POST['old_password'];
        if ($modelUser->checkLogin($user['username'], $old_password) != null) {
            if ($_POST['name'] != "" || $_POST['name'] != null) {
                $name = $_POST['name'];
            } else {
                $name = $user['name'];
            }
            if ($_POST['email'] != "" || $_POST['email'] != null) {
                if ($modelUser->checkEmail($_POST['email'])) {
                    $email = $_POST['email'];
                } else {
                    $email = null;
                    $error['email'] = "Email đã có người đăng ký";
                }
            } else {
                $email = $user['email'];
            }
            if ($new_password != null && $new_password != -1 && $email != null) {
                $modelUser->updateUser($user['id'], $name, $email, $new_password);
                $_SESSION['user']['name'] = $name;
                $_SESSION['user']['email'] = $email;
                $_SESSION['user']['password'] = $new_password;
                $data['success'] = true;
            } else if ($new_password == null && $email != null) {
                $modelUser->updateUser($user['id'], $name, $email, $old_password);
                $_SESSION['user']['name'] = $name;
                $_SESSION['user']['email'] = $email;
                $_SESSION['user']['password'] = $old_password;
                $data['success'] = true;
            }
        } else {
            $error['old_password'] = "Mật khẩu hiện tại không đúng";
        }
        $data['error'] = $error;
        echo json_encode($data);
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
            session_start();
            if (!empty($_SESSION['user'])) {
                $user = $_SESSION['user'];
                ControllerUser::updateUserInfo($user);
            } else {
                header("Location:./ControllerPage.php?page=login");
            }
            break;
        default:
            break;
    }
}
