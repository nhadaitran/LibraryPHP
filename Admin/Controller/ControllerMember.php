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
       $ControllerMember = new ControllerMember(); 
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
                $n = $ControllerMember->selectLockMember($id); 
                // var_dump($n);
                // exit();
                if($n==null){                
                    $ControllerMember->updateLockMember($id);
                    header("Location: ../Controller/ControllerPage.php?page=member");
                }else{
                    $ControllerMember->updateUnLockMember($id);
                    header("Location: ../Controller/ControllerPage.php?page=member");
                }
                break;
        }
    }
}


