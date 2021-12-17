<?php

/**
 * @file      articles.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   30.11.2021
 */

require "model/articlesManager.php";

function displayArticles(){
    $articles = getArticles();

    require "view/articles.php";

}

function displayArticlesAdmin(){
    $articlesAdmin = getArticles();
    require "view/articlesAdmin.php";

}

function deleteArticle($articleDetail){
    deleteArticleInDB($articleDetail);
    header("Location: " . 'index.php?action=gestion');
}


function addArticle($articleDetail){

    if(isset($articleDetail['code']) && isset($articleDetail['brand']) && isset($articleDetail['model']) && isset($articleDetail['snowLength'])
        && isset($articleDetail['audience']) && isset($articleDetail['qtyAvailable'])
        && isset($articleDetail['description'] ) && isset($articleDetail['price'])
        &&  isset($articleDetail['descriptionFull']) && isset($articleDetail['level'])){
        if(addArticleInDB($articleDetail)){
            header("Location: " . 'index.php?action=gestion');

        }else{
            $errorMessage = "Manque un élément";
            require 'view/addArticle.php';
        }

    }else{

        require 'view/addArticle.php';
    }

}



function modifyArticle($articleDetail){

    if(isset($articleDetail['code']) && isset($articleDetail['brand']) && isset($articleDetail['model']) && isset($articleDetail['snowLength'])
        && isset($articleDetail['audience']) && isset($articleDetail['qtyAvailable'])
        && isset($articleDetail['description'] ) && isset($articleDetail['price'])
        &&  isset($articleDetail['descriptionFull']) && isset($articleDetail['level'])){
        if(addArticleInDB($articleDetail)){
            header("Location: " . 'index.php?action=gestion');

        }else{
            $errorMessage = "Manque un élément";
            require 'view/modifyArticle.php';
        }

    }else{

        require 'view/modifyArticle.php';
    }

}