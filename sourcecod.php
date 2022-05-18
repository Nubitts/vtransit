<?php

include('./connecto.php');

$header1 = json_decode(file_get_contents("php://input"));

require './vendor/autoload.php';

use Doctrine\DBAL\DriverManager;

$db = $con;

$location = $header1->location;
$Query = "";

print $location;

$Query = "select zona,ticket,descrip,pesob,ifnull(entry,'_') as entry from vltransit where location = 'CORRALON' order by zona,ticket";

$statement = $db->prepare($Query);
$resultSet = $statement->execute();
$movi = $resultSet->fetchAllAssociative();

$db = null;

echo json_encode($movi);
