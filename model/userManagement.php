<?php

/**
 * @file      userManagement.php
 * @brief     File description
 * @author    Created by Oceane.PICHONNAZ
 * @version   19.11.2021
 */

require "dbConnector.php";


function register($data){

    if(isAlreadyInDB($data)){
        return 0;
    }else{

        $userEmailAddress = $data['emailSignup'];
        $userHashPsw = password_hash($data['pwdSignUp'],PASSWORD_DEFAULT);

        //$queryInsert = "INSERT INTO users (userEmailAddress,userHashPsw) values (userEmailAddress=:femail,userHashPsw=:fpwd)";
        //$param = array(':femail' => $userEmailAddress,':fpwd' => $userHashPsw);

        $queryInsert = "INSERT INTO users (userEmailAddress,userHashPsw) values (:femail,:fpwd)";
        $param = array(':femail' => $userEmailAddress,':fpwd' => $userHashPsw);

        executeQueryInsert($queryInsert,$param);
        return 1;
    }


}

function isAlreadyInDB($data){

    $email = $data['emailSignup'];
    $query = "select * from users where userEmailAddress=:femail";
    $params = array(':femail'=> $email);

    if(executeQuerySelect($query,$params) != null) {
        return 1;
    }else{
        return 0;
    }

}

function checkLogin($data){

    $userEmailAddress = $data['email'];
    /*
    $query="SELECT userEmailAddress FROM users WHERE userEmailAddress=:femail and userHashPsw = :fpwd ";
    $params = array(':femail' => $userEmailAddress, ':fpwd' => $userHashPsw);
    */

    $query="SELECT userHashPsw FROM users WHERE userEmailAddress=:femail ";
    $params = array(':femail' => $userEmailAddress);

    $dataDB = executeQuerySelect($query,$params);


    if($dataDB !=null){
        foreach ($dataDB as $key => $tab){
            foreach ($tab as $key2 => $pw){
                if(password_verify( $data['userPswd'],$pw)){
                    return true;
                }else{
                    return false;
                }
            }
        }

    return true;

    }else{
        return false;
    }


    /*

    $userFile = file_get_contents("model/users.json");
    $tabUserJson = json_decode($userFile, true);

    $email = $data['email'];
    $pwd = $data['userPswd'];

    foreach ($tabUserJson as $key => $tabUserJsonValues ){
            foreach ($tabUserJsonValues as $entries => $tabLogins){
                $em = in_array($email,$tabLogins,true);
                $pw =in_array($pwd,$tabLogins,true);

                if($em && $pw){
                    return true;
                }
            }
    }

    return false;
    */


}