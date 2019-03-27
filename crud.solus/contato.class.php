<?php 

	class Contato{

		private $pdo;

		public function __construct(){

			$this->pdo = new PDO("mysql:dbname=clientes;host=localhost", "ricardo", "123");

		}




	}



 ?>