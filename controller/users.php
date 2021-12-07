<?php

/**
 * @file      users.php
 * @brief     File description
 * @author    Created by Oceane.PICHONNAZ
 * @version   16.11.2021
 */

require 'model/userManagement.php';

/**
 * @brief this function is designed to display the login form
 */
function login($data){
    // check if email & pwd is set and if we come from login page
    if(isset($data['email']) && isset($data['userPswd'])){
        if(checkLogin($data)){
            $_SESSION['email'] = $data['email'];
            require 'view/home.php';

        }else{
            $errorMessage = "Email incorrect";
            require 'view/login.php';
        }

    }else{

        require 'view/login.php';
    }
}

function signup($data){

    if(isset($data['emailSignup']) && isset($data['pwdSignUp'])){
        if(register($data)){
            require 'view/login.php';

        }else{
            $errorMessage = "Email déjà utilisé";
            require 'view/signup.php';
        }

    }else{

        require 'view/signup.php';
    }
}

function logout(){
    session_destroy();
    $_SESSION = array();
    require 'view/home.php';
}
