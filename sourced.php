<?php

include('./connecto.php');

$header1 = json_decode(file_get_contents("php://input"));

require './vendor/autoload.php';

use Doctrine\DBAL\DriverManager;

$db = $con;

$Query = "";

/* 
$Query = "Delete from tvtransit";

$county1 = $con->executeStatement($Query, array()); */

$Query = "call preparedatatransit;";

$county2 = $con->executeStatement($Query, array());

sleep(30);

$Query = "select global,corralon,batey,transito from vrbtransit";

$statement = $db->prepare($Query);
$resultSet = $statement->execute();
$movi = $resultSet->fetchAllAssociative();

$db = null;

echo json_encode($movi);
