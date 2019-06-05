<?php 

	session_start();
	require 'config.php';

	if(empty($_SESSION['login'])){
		header("Location: login.php");
		exit;
	}

	$id = $_SESSION['login'];








 ?>

 <h1>Seja bem vindo</h1>