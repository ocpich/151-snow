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
function login(){

    // check if email & pwd is set and if we come from login page
    if(isset($_POST['email']) && isset($_POST['userPswd'])){

        if(checkLogin()){
            $_SESSION['email'] = $_POST['email'];

            require 'view/home.php';
            echo 'email set';
        }else{
            require 'view/login.php';
            echo 'email not set';
        }

    }else{
        require 'view/login.php';
    }
}

function logout(){
    session_destroy();
}
