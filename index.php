
<?php

/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   26-MAR-2021
 */

session_start();

require "controller/navigation.php";
require "controller/users.php";
require "controller/articles.php";
require "controller/articles_detail.php";


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'displayArticlesDetail':
            displayArticlesDetail($_GET);
            break;
        case 'gestion':
            displayArticlesAdmin();
            break;
        case 'login':
            login($_POST);
            break;
        case 'signup':
            signup($_POST);
            break;
        case 'articles':
            displayArticles();
            break;
        case 'addArticle':
            addArticle($_POST);
            break;
        case 'displayArticlesAdmin':
            displayArticleAdmin($_GET);
            break;
        case 'modifyArticle':
            modifyArticle($_POST);
            break;
        case 'logout':
            logout();
            break;
        case 'deleteArticle':
            deleteArticle($_GET['id']);
            break;
        default :
            lost();
    }
} else {
    home();
}
