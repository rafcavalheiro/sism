<?php

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST','localhost');
define('DB_USERNAME','arduino');
define('DB_PASSWORD','arduino1234');
define('DB_NAME','arduino');
//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

$query = sprintf("SELECT cod_equipamento,consumo, tarifa, data FROM arduino_consumo GROUP BY cod_equipamento");


//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);