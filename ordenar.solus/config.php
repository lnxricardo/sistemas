<?php 

$conn = "mysql:dbuser=ordernar";
$dbuser = "ricardo";
$dbpass = "123";

try {

	$pdo = new PDO($conn, $dbuser, $dbpass);
	echo "Ok";
	
} catch (PDOException $e) {

	echo "Erro :".$e->getMessage();
	
}




 ?>