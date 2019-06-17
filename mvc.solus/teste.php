<?php 

require 'config.class.php';

$query = new Dba();
$clock = "DDR4";
$capacidade = "8GB";

$query->addRam($clock, $capacidade);
 header('Location: index.php');

 ?>