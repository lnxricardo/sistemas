<?php 

$dsn = "mysql:dbname=blog;host:localhost";
$dbuser = "ricardo";
$dbpass = "123";


try {

	$pdo = new PDO($dsn, $dbuser, $dbpass);
	
} catch (PDOException $e) {
	echo "falha".$e->getMessage();
	
}

 ?>