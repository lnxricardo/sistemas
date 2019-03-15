<?php 

$conn = "mysql:dbname=blogLoge;host=localhost";
$dbuser = "ricardo";
$dbpass = "123";

try {

	$pdo = new PDO($conn, $dbuser, $dbpass);

	
	
} catch (PDOException $e) {
	echo "Error :".$e->getMessage();
}


 ?>