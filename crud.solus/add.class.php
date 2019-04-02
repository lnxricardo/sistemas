<?php 

	class Contato{

			private $pdo;

			public function __construct(){

				$this->pdo = new PDO("mysql:dbname=clientes;host=localhost", "ricardo", "123");
			}

			

		

		// THIS START OF CODE

		// CREATE DATA IN DB

		public function add($email, $nome = ''){
			if($this->existsMail($email) == false){
				$sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':nome', $nome);
				$sql->bindValue(':email', $email);
				$sql->execute();
				return true;
			}else{
				return false;

			}


		}

	


		// GET NAME

		public function getNome($email){
			$sql = "SELECT * FROM contatos WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':email', $email);
			$sql->execute();
			if($sql->rowCount() > 0){
				$data = $sql->fetch();
				return $data['nome'];

			}else{
				return false;
			}

		}

		// GET LIST ALL CONTACTS

		public function getAll(){
			$sql = "SELECT * FROM contatos";
			$sql = $this->pdo->query($sql);

			if($sql->rowCount() > 0){
				return $sql->fetchAll();
			}else{
				return array();
			}

		}

		// UPDATE LIST OF CONTACTS

		public function updateData($email, $nome){

			if($this->existsMail($email) == true){

				$sql = "UPDATE contatos SET nome = :nome WHERE email = :email";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':nome', $nome);
				$sql->bindValue(':email', $email);
				$sql->execute();
				return true;


			}else{
				return false;
			}

		}

		// DELETE DATA

		public function deleteData($email){
			if($this->existsMail($email)){

				$sql = "DELETE FROM contatos WHERE email = :email";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':email', $email);
				$sql->execute();
				return true;


			}else{
				return false;
			}

		}


		// MAKE PRIVATE FUNCTION TO VERIFY MAIL

		private function existsMail($email){
			$sql = "SELECT * FROM contatos WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':email', $email);
			$sql->execute();
			if($sql->rowCount() > 0){
				return true;

			}else{
				return false;
			}


			
		}


	
}








 ?>