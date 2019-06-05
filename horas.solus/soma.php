<?php 


// if(!empty($_POST['entrada'])){

// 	$entrada = addslashes($_POST['entrada']);
// 	$saida = addslashes($_POST['saida']);
// }


$entrada = '09:00:00';
$saida = '10:47:00';
$entrada = strtotime($entrada);
$saida = strtotime($saida);
$totalMinutos = ($saida - $entrada) / 60;
$intervalosDe15 = ceil($totalMinutos / 15);
$intervaloMinutos = $intervalosDe15 * 15;
$horas = floor($intervaloMinutos / 60);
$minutos = $intervaloMinutos % 60;
$interval = new DateInterval("PT{$horas}H{$minutos}M");
echo $interval->format('%H:%I:%S');
$hora = mktime($interval);
echo $hora;

