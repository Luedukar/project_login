<?php 

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';
$dbname = "login";

$mysqli = new mysqli($host, $usuario, $senha, $database);


try {

  	$conn = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);


  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {

  	$error = $e->getMessage();

  	echo "Erro: $error";

  }
