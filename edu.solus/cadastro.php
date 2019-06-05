<?php 

	require 'config.php';

	if(!empty($_POST['nome']) && !empty($_POST['email'])){

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = $pdo->prepare("INSERT INTO tbl_user (nome, email, senha) VALUES (:nome, :email, :senha)");
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->execute();
		echo "Usuario cadastrado com sucesso";
		

	} else {
		echo "Erro";
	}



 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	 	<form method="POST">

 	 	Nome:<br>
 		<input type="text" name="nome" required=""><br><br>
 		Email:<br>
 		<input type="email" name="email" required=""><br><br>
 		Senha:<br>
 		<input type="password" name="senha"><br><br>
 		<input type="submit" value="Entrar" name=""> 		

 	</form>
 
 </body>
 </html>