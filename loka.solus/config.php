<?php 

	try {

		$pdo = new PDO("mysql:dbname=projeto_reservas; host=localhost", 'ricardo', '123');
		

		
	} catch (PDOException $e) {

		echo "Erro: ".$e->getMessage();
		
	}




 ?>