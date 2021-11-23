<?php

/**
 * @file      userManagement.php
 * @brief     File description
 * @author    Created by Oceane.PICHONNAZ
 * @version   19.11.2021
 */


function checkLogin(){
    $userFile = file_get_contents("model/users.json");
    $tabUserJson = json_decode($userFile, true);

    $email = $_POST['email'];
    $pwd = $_POST['userPswd'];

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


}