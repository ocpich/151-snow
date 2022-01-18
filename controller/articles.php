<?php

/**
 * @file      articles.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   30.11.2021
 */

require "model/articlesManager.php";
require_once('Cart.php');
require_once('CartItem.php');

function displayArticles(){
    $articles = getArticles();

    require "view/articles.php";

}

function displayArticlesAdmin(){
    $articlesAdmin = getArticles();
    require "view/articlesAdmin.php";

}


function addToCart($infos){

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = new Cart();
    }

    $qty= $infos['qty'];

    $articl = findArticleWithId($infos['id']);


    $cartItem = new CartItem($articl[0]['id'],$qty);
    $cartItem->SetAttributes($articl[0]['description'],$articl[0]['photo'],$articl[0]['price']);

    $_SESSION['cart']->AddItemInCart($cartItem);
    $items = $_SESSION['cart']->GetItems();

    require "view/cartView.php";

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



function modifyArticle($articleInfos){

    if(isset($articleInfos['brand']) && isset($articleInfos['model']) && isset($articleInfos['snowLength']) && isset($articleInfos['qtyAvailable']) &&  isset($articleInfos['price']) ){
        if(updateArticleInDB($articleInfos)){
            header("Location: " . 'index.php?action=gestion');

        }else{
            $errorMessage = "Manque un élément";
            require 'view/modifyArticle.php';
        }

    }else{

        require 'view/modifyArticle.php';
    }

}