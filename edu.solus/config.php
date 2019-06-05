<?php 

	try {

		$pdo = new PDO("mysql:dbname=db_sistema;host=localhost", "ricardo", "mudar@123");
		echo "ok";
		
		
	} catch (PDOException $e) {

		echo "Erro: ".$e->getMessage();

	
		
	}



 ?>