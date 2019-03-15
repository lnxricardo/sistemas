<?php 
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "ricardo";
$dbpass = "123";

try{

	$pdo = new PDO($dsn, $dbuser, $dbpass);
	
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);
	
	if($sql->rowCount() > 0){
    	
    	foreach($sql->fetchAll() as $usuario){
    		echo "Nome: ".$usuario['nome']." - Email: ".$usuario['email']."<br/>";
    	}

	}else{
		echo "Não há cadastro";
	}





}catch(PDOExecption $e){

	echo "Falha de conexão".$e->getMessage();

}









 ?>