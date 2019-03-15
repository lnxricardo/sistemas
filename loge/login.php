<?php 
require 'config.php';
session_start();
if(isset($_POST['email']) && empty($_POST['email']) == false){

	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0){
		$dado = $sql->fetch();

		$_SESSION['id'] = $dado['id'];
		header("Location: index.php");
	}




}




 ?>

<form method="POST">

	
	E-mail:
	<input type="text" name="email"><br><br>
	Senha:
	<input type="password" name="senha"><br><br>
	<input type="submit" name="Login">



</form>

<a href="add.php">Deseja adicionar um novo usuario?</a>