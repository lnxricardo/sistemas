<?php 
require 'header.php';



if(isset($_POST['clock']) && !empty($_POST['clock'])){
	$clock = addslashes($_POST['clock']);
	$capacidade = addslashes($_POST['capacidade']);

	$query->addRam($clock, $capacidade);
	 header('Location: index.php');
} else {
	echo 'erro';
}


     