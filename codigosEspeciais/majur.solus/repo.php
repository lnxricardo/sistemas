
<?php 

$entrada = '09:00';
$saida = '10:47';


$entrada = strtotime($entrada);
$saida = strtotime($saida);

$totalMinutos = ($saida - $entrada) / 60;

$intervalosDe15 = ceil($totalMinutos / 15);

$intervaloMinutos = $intervalosDe15 * 15;

$horas = floor($intervaloMinutos / 60);
$minutos = $intervaloMinutos % 60;
$interval = new DateInterval("PT{$horas}H{$minutos}M");
echo $interval->format('%H:%I');




















 ?>







