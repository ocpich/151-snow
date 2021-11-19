<?php

/**
 * @file      userManagement.php
 * @brief     File description
 * @author    Created by Oceane.PICHONNAZ
 * @version   19.11.2021
 */


function checkLogin($email,$pwd){
    $userFile = file_get_contents("users.json");
    $tabUserJson = json_decode($userFile, true);





}