<?php 
	session_start();
	try {

		$pdo = new PDO("mysql:dbname=classificados;host=localhost", "ricardo", "123");
		
	} catch (PDOException $e) {
		echo "Erro: ".$e->getMesage();
		exit;
		
	}


 ?>