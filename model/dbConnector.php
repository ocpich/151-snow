<?php

/**
 * @file      dbConnector.php
 * @brief     This controller is designed to manage database accesses and transactions
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY, Frederique.ANDOLFATTO
 * @version   22-NOV-2021
 */

/**
 * @brief This function is designed to manage the database connexion. Closing will be not proceeded there. The client is responsible of this.
 * @return PDO|null
 * @remark : http://php.net/manual/en/pdo.construct.php
 */
function openDBConnexion()
{
    $tempDBConnexion = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    //$port = 880;
    $charset = 'utf8';
    $dbName = 'snows';
    $userName = 'SNOW'; //to change
    $userPwd = 'Pa$$w0rd';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try {
        $tempDBConnexion = new PDO($dsn, $userName, $userPwd);
    } catch (PDOException $exception) {
        echo 'Connection failed' . $exception->getMessage();
		die();
    }
    return $tempDBConnexion;
}

/**
 * @brief This function is designed to execute a query received as parameter
 * @param $query string the query to execute
 * @param $params array containing the named parameters of the query
 * @return array|null
 * @link https://php.net/manual/en/pdo.prepare.php
 */
function executeQuerySelect($query, $params)
{
    $queryResult = null;

    //open DB Connection
    $dbConnexion = openDBConnexion();


    //if connection is not null
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

/**
 * @brief This function is designed to insert value in database
 * @param $query
 * @return null
 */
function executeQueryInsert($query)
{

}



// Classe pour gérer les exceptions liées au modèle
class ModelDataException extends Exception
{

}