<?php

/**
 * @file      userManagement.php
 * @brief     File description
 * @author    Created by Oceane.PICHONNAZ
 * @version   19.11.2021
 */

require "dbConnector.php";

function checkLogin($data){

    $userEmailAddress = $data['email'];
    $userHashPsw = $data['userPswd'];

    $query="SELECT userEmailAddress FROM users WHERE userEmailAddress=:femail and userHashPsw = :fpwd ";

    $params = array(':femail' => $userEmailAddress, ':fpwd' =>$userHashPsw);
    $dataDB = executeQuerySelect($query,$params);

    if($dataDB !=null){
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