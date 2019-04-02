<?php 
 	$horaInicial = $_POST['inicio'];
 	$horaFinal = $_POST['final'];


	$horaInicial = strtotime($horaInicial);
	$horaFinal= strtotime($horaFinal);

	$totalMinutos = ($horaFinal - $horaInicial) / 60;

	$intervalosDe15 = ceil($totalMinutos / 15);

	$intervaloMinutos = $intervalosDe15 * 15;

	$horas = floor($intervaloMinutos / 60);
	$minutos = $intervaloMinutos % 60;
	$interval = new DateInterval("PT{$horas}H{$minutos}M");
	echo $interval->format('%H:%I');



 ?>

