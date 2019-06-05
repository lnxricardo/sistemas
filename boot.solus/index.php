<?php 

	session_start();
	require 'config.php';

	if(empty($_SESSION['mmnlogin'])){
		header("Location: login.php");
		exit;
	}

	$id = $_SESSION['mmnlogin'];
	$sql = $pdo->prepare("SELECT nome FROM usuarios WHERE id = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();

	if($sql->rowCount() > 0){
		$sql = $sql->fetch();
		$nome = $sql['nome'];
	} else {
		header("Location: login.php");
	}

	$lista = array();

	$sql = $pdo->prepare('SELECT * FROM usuarios WHERE id_pai = :id');
	$sql->bindValue(":id", $id);
	$sql->execute();
	if($sql->rowCount() > 0){
		$lista = $sql->fetchAll();
	}
	


 ?>
	<h1>Sistema de Markting Multi Nivel</h1>
	 <h2><?php echo "Seja bem vindo Sr. ".$nome; ?></h2>

	 <a href="cadastro.php">Cadastar Usuário</a>

	 <a href="sair.php">sair</a>

	 <hr>

	 <h4>Lista de Cadastros</h4>
	 <ul>
		 <?php foreach($lista as $users): ?>
		 	<li><?php echo $users['nome']; ?></li>
		 <?php endforeach; ?>
	</ul>
