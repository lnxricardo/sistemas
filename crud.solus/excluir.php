<?php 


	require 'contato.class.php';
	$contato = new Contato();

	// RECEIVE ID BY ADDRESS

	if(!empty($_GET['id'])){
		$id = $_GET['id'];

		$contato->excluirId($id);
		header("Location: index.php");


	 }
