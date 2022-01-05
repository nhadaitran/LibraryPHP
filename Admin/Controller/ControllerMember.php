<?php

include_once "../Model/ModelUser.php";


class ControllerMember
{

    //API
    // public static function findByIdMember($id)
    // {
    //     $ModelUser = new ModelUser();
    //     $memberList = $ModelUser->findByIdMember($id);
    //     ob_clean();
    //     echo json_encode($memberList, JSON_UNESCAPED_UNICODE);
    // }

    public static function findByIdNameMember($id)
    {
        $ModelUser = new ModelUser();
        $memberList = $ModelUser->findByIdNameMember($id);
        ob_clean();
        echo json_encode($memberList, JSON_UNESCAPED_UNICODE);
    }

    public static function updateLockMember($id)
    {
        $ModelUser = new ModelUser();
        $ModelUser->updateLockMember($id);
    }

    public static function updateUnLockMember($id)
    {
        $ModelUser = new ModelUser();
        $ModelUser->updateUnLockMember($id);
    }


    public static function selectLockMember($id)
    {
        $ModelUser = new ModelUser();
        $s = $ModelUser->selectLockMember($id);
        return $s;
    }
}


//method get: Tìm kiếm username và id, name
if (sizeof($_GET) > 0) {
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case 'searchIdNameMember':
                if (!empty($_GET['idMember'])) {
                    $id = $_GET['idMember'];
                    ControllerMember::findByIdNameMember($id);
                }
                break;
            case 'lock':
                //   khóa/mở tài khoản
                $id = $_GET['id'];
                $n = ControllerMember::selectLockMember($id); 
                if($n==null){                
                    ControllerMember::updateLockMember($id);
                    header("Location: ../Controller/ControllerPage.php?page=member");
                }else{
                    ControllerMember::updateUnLockMember($id);
                    header("Location: ../Controller/ControllerPage.php?page=member");
                }
                break;
        }
    }
}



//method post
if (sizeof($_POST) > 0 && $_POST['action'] != null) {
    $action = $_POST['action'];
    switch ($action) {
        case 'xoa':
            break;
        case 'lock':
            $id = $_GET['id'];
            ControllerMember::updateLockMember($id);
            break;

        case 'sua':
            echo 'register';
            break;
        default:
            break;
    }
}
