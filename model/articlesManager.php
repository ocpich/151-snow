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