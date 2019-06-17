<?php require 'config.class.php';

$query = new Dba();

if(isset($_POST['marca']) && !empty($_POST['marca'])){
	$marca = addslashes($_POST['marca']);
	$modelo = addslashes($_POST['modelo']);

	 $query->addCpu($marca, $modelo);
     header('Location: index.php');
}