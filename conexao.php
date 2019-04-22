<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost"; //Servidor do mysql
$user = "arduino"; //Usuario do banco de dados
$senha = "arduino1234"; //senha do banco de dados
$db = "arduino"; //banco de dados

mysql_connect($host, $user, $senha) or die (mysql_error());
mysql_select_db($db) or die (mysql_error()); 
?>

