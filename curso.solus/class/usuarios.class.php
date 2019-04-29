<?php 
	class Usuarios{

		public function cadastar($nome, $email, $senha, $telefone){

			$sql = $pdo->prepare("SELECT FROM usuarios WHERE email = :email");
			$sql->bindValue(":email", $email);
			$sql->execute();

			if($sql->rowCount == 0){

			}else{
				return false;
			}


		}


	}