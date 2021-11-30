<?php

/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   26-MAR-2021
 */


require "controller/navigation.php";
require "controller/users.php";
require "controller/articles.php";


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login':
            login($_POST);
            break;
        case 'articles':
            displayArticles();
            break;
        case 'logout':
            logout();
            break;
        default :
            lost();
    }
} else {
    home();
}
