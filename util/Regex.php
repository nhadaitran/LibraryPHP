<?php
//include './Contraints.php';
include '../../util/Contraints.php';


class Regex
{
    public static function validationUserName($username){
        return preg_match(Contraints::VALIDATTION_USERNAME, $username);
    }
}