<?php

/**
 * @file      articles_detail.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   03.12.2021
 */



function displayArticlesDetail($articleId){
    $articleInfos = findArticleWithId($articleId['id']);

    require "view/articles_detail.php";
}