<?php 
session_start();
require 'config.php';

if(isset($_POST['tipo'])){

	$tipo = addslashes($_POST['tipo']);
	$valor = str_replace(",", ".", addslashes($_POST['valor']));
	$valor = floatval($valor);

	$sql = $pdo->prepare("INSERT INTO historico (id_conta, tipo, valor, data_op) VALUES (:id_conta, :tipo, :valor, NOW())");
	$sql->bindValue(":id_conta", $_SESSION['banco']);
	$sql->bindValue(":tipo", $tipo);
	$sql->bindValue(":valor", $valor);
	// $sql->bindValue(:"data_operacao", $data_operacao);
	$sql->execute();

	if($tipo == "0"){

		$sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id=:id");
		$sql->bindValue(":valor", $valor);
		$sql->bindValue(":id", $_SESSION['banco']);
		$sql->execute();

	}else{

		$sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id=:id");
		$sql->bindValue(":valor", $valor);
		$sql->bindValue(":id", $_SESSION['banco']);
		$sql->execute();

	}

	header("Location: index.php");
	exit;


}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Banco Solus: Transações</title>
 </head>
 <body>

 	<form method="POST" >
		Selecione a Operação:
		<select name="tipo">
			<option value="0">Depósito</option>
			<option value="1">Saque</option>
		</select><br><br>

		Valor:<br>
		<input type="text" name="valor" pattern="[0-9.,]{1,}"><br><br>
		<input type="submit" value="Adcionar">



	</form>
 
 </body>
 </html>