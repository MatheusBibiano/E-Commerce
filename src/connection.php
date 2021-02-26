<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "loja";

try {
	$connection = new PDO("mysql:host=$server;dbname=$database;charset=utf8", $user, $pass);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $err) {
	die("Conexão falhou: ".$err->getMessage());
}
