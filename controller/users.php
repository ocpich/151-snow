<?php

/**
 * @file      users.php
 * @brief     File description
 * @author    Created by Oceane.PICHONNAZ
 * @version   16.11.2021
 */


/**
 * @brief this function is designed to display the login form
 */
function login(){
    $email = $_POST['email'];
    $pwd = $_POST['userPswd'];

    // check if email & pwd is set and if we come from login page
    if(isset($email) && isset($pwd)){

        require "model/userManagement";
        checkLogin($email,$pwd);

        require 'view/home.php';
    }else{
        require 'view/login.php';
    }
}
