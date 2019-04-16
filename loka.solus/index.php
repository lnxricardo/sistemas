<?php 

	require 'config.php';
	require 'classes/carros.class.php';
	require 'classes/reservas.class.php';

	$reservas = new Reservas($pdo);
	$carros = new Carros($pdo);

 ?>

 <h1>Reservas</h1>

 <a href="reservar.php">Adicionar Reserva</a><br><br>

 <?php
 $lista = $reservas->getReservas();

 foreach($lista as $item){



 	$data1 = date('d/m/Y', strtotime($item['data_inicio']));
 	$data2 = date('d/m/Y', strtotime($item['data_fim']));

 	echo $item['pessoa']." reservou o carro ".$item['id_carro'].' entre o dia '.$data1.' e  o dia '.$data2.'<br>';




 }
 













