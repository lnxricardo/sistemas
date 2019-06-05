<?php

class Cadastro{
	private $pdo;

	public function __construct(){

		try {

			$this->pdo = new PDO("mysql:dbname=dbhora;host=localhost", "ricardo", "123");
			
		} catch (PDOException $e) {
			echo "Erro: ".$e->getMessage();
			
		}
	}



	public function sumTime($os, $chamado, $empresa, $data, $entrada, $saida){
		
		$this->entrada = strtotime($entrada);
		$this->saida = strtotime($saida);
		$totalMinutos = ($this->saida - $this->entrada) / 60;
		$intervalosDe15 = ceil($totalMinutos / 15);
		$intervaloMinutos = $intervalosDe15 * 15;
		$horas = floor($intervaloMinutos / 60);
		$minutos = $intervaloMinutos % 60;
		$interval = new DateInterval("PT{$horas}H{$minutos}M");
		$total = $interval->format('%H:%I:%S');

		$sql = $this->pdo->prepare("INSERT INTO horas (os, chamado, empresa, data, entrada, saida, total) VALUES (:os, :chamado, :empresa, :data, :entrada, :saida, :total)");
		$sql->bindValue(':os', $os);
		$sql->bindValue(':chamado', $chamado);
		$sql->bindValue(':empresa', $empresa);
		$sql->bindValue(':data', $data);
		$sql->bindValue(':entrada', $entrada);
		$sql->bindValue(':saida', $saida);
		$sql->bindValue(':total', $total);
		$sql->execute();
		return true;
		exit;

	}

	public function getAll(){
		$data = array();
		$sql = $this->pdo->query('SELECT * FROM horas ORDER BY id');
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();
			return $data;
		}else{
			return $data;
		}
		
	}

	public function getTotal(){
		$data = [];
		$sql = $this->pdo->query("SELECT total FROM horas");
		$sql->execute();
		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();
			return $data;
		}else{
			return $data;
		}
	}

	public function getSomaHoras(){
		$sql = $this->pdo->query("SELECT time_format( SEC_TO_TIME( SUM( TIME_TO_SEC( total ) ) ),'%H:%i:%s') AS total_horas FROM horas");
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	








}