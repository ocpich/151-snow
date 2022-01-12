<?php

/**
 * @file      articlesManager.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   30.11.2021
 */


function getArticles(){
    $queryResult = null;

    //open DB Connection
    $dbConnexion = openDBConnexion();

    $query = "SELECT * from snows";

    if ($dbConnexion != null) {
        //preparation query
        $statement = $dbConnexion->prepare($query);

        //we execute the request with the parameters used on the query
        $statement -> execute();

        //we prepare the results for the navigator
        $queryResult = $statement->fetchAll();

    }
    $dbConnexion = null; // Fermeture de ma connection à la BD*/
    return $queryResult;

}

function findArticleWithId($articleId){
    $queryResult = null;

    //open DB Connection
    $dbConnexion = openDBConnexion();

    $query = "SELECT * FROM snows WHERE id=:idArticle";
    $params = array(':idArticle' => $articleId);

    if ($dbConnexion != null) {
        //preparation query
        $statement = $dbConnexion->prepare($query);

        //we execute the request with the parameters used on the query
        $statement -> execute($params);

        //we prepare the results for the navigator
        $queryResult = $statement->fetchAll();

    }
    $dbConnexion = null; // Fermeture de ma connection à la BD*/
    return $queryResult;
}


function deleteArticleInDB($articleId){

    //open DB Connection
    $dbConnexion = openDBConnexion();

    $query = "DELETE FROM snows WHERE id=:idArticle";
    $params = array(':idArticle' => $articleId);

    if ($dbConnexion != null) {
        //preparation query
        $statement = $dbConnexion->prepare($query);

        //we execute the request with the parameters used on the query
        $statement->execute($params);
    }
    $dbConnexion = null;

}

function addArticleInDB($details){
    $code = $details['code'];
    $brand = $details['brand'];
    $model = $details['model'];
    $snow = $details['snowLength'];
    $audience = $details['audience'];
    $qty = $details['qtyAvailable'];
    $description = $details['description'];
    $price = $details['price'];
    $descriptionFull = $details['descriptionFull'];
    $level = $details['level'];

    //$target_dir = "view/content/images/";
    //$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);

    $photo = $details['photo'];
    $active = 1;


    $queryInsert = "INSERT INTO snows (code,brand,model,snowLength,audience,qtyAvailable,description,price,descriptionFull,level,photo,active) 
values (:fcode,:fbrand,:fmodel,:fsno,:faud,:fqty,:fdesc,:fprice,:fdescFull,:flevel,:fphoto,:factive)";
    $param = array(':fcode' => $code,':fbrand' => $brand,':fmodel' => $model,':fsno' => $snow,':faud' => $audience, ':fqty' => $qty, ':fdesc' => $description,':fprice' => $price,
        ':fdescFull' => $descriptionFull,':flevel' => $level,':fphoto' => $photo,':factive' => $active);

    executeQueryInsert($queryInsert,$param);
    return 1;

}

function updateArticleInDB($details){

    $code = $details['code'];
    $brand = $details['brand'];
    $model = $details['model'];
    $snow = $details['snowLength'];
    $audience = $details['audience'];
    $qty = $details['qtyAvailable'];
    $description = $details['description'];
    $price = $details['price'];
    $descriptionFull = $details['descriptionFull'];
    $level = $details['level'];
    //$photo = $details['photo'];
    $active = 1;

    $queryInsert = "UPDATE snows SET brand=:fbrand,model=:fmodel,snowLength=:fsno,audience=:faud,qtyAvailable=:fqty,description=:fdesc,price=:fprice,descriptionFull=:fdescFull,level=:flevel,active=:factive WHERE code=:fcode";
    $param = array(':fbrand' => $brand,':fmodel' => $model,':fsno' => $snow,':faud' => $audience, ':fqty' => $qty, ':fdesc' => $description,':fprice' => $price,
        ':fdescFull' => $descriptionFull,':flevel' => $level,':factive' => $active,':fcode' => $code);

    executeQueryInsert($queryInsert,$param);
    return 1;

}

