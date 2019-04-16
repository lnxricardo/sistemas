<?php 

	class Reservas {

		private $pdo;

		public function __construct($pdo){

			$this->pdo=$pdo;
		}

		public function getReservas(){

			$array = array();  //-> Irá receber as reservas
			$sql = "SELECT * FROM reservas"; // Faz um select no banco
			$sql = $this->pdo->query($sql);

			if($sql->rowCount() > 0){ // após o select, prepara o array do resultado
				$array = $sql->fetchAll(); //variavel recebendo o array do resultado
			}
			return $array;
		}

		public function verificaDisponibilidade($carro, $data_inicio, $data_fim){



			$sql = 'SELECT * FROM reservas 
			WHERE id_carro = :carro 
			AND ( NOT (data_inicio > :data_fim OR data_fim < :data_inicio))';


			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":carro", $carro);
			$sql->bindValue(":data_inicio", $data_inicio);
			$sql->bindValue(":data_fim", $$data_fim);
			$sql->execute();

			if($sql->rowCount() > 0){
				return false;
			}else{
				return true;
			}



		}

		public function reservar($carro, $data_inicio, $data_fim, $pessoa){

			$sql = "INSERT INTO reservas (carro, data_inicio, data_fim, pessoa) VALUES (:carro, :data_inicio, :data_fim, :pessoa)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':carro', $carro);
			$sql->bindValue(':data_inicio', $data_inicio);
			$sql->bindValue(':data_fim', $data_fim);
			$sql->bindValue(':pessoa', $pessoa);
			$sql->execute();



		}




	}





 ?>