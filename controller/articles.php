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
