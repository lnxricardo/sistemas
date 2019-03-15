<?php 
	session_start();

	if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
		echo "Área restrita";
	}else{
		header("Location: login.php");
	}

 ?>

 <form method="POST" enctype="multipart/form-data" action="receive.php">

 	<input type="file" name="arquivo" >
 	<input type="submit" name="Enviar">
 	


 </form>