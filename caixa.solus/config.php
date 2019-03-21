<?php 


$conn  = "mysql:dbname=caixa_eletronico;host=localhost";
$dbuser  = "ricardo";
$dbpass  = "123";

try {

	$pdo = new PDO($conn, $dbuser, $dbpass);
	
	
} catch (PDOException $e) {

	echo "Error ->".$e->getMessage();
	
}

 ?>