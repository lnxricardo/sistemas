<?php 
require 'config.php';

if(isset($_POST['nome']) && !empty($_POST['nome'])){
	$nome = addslashes($_POST['nome']);
	$msg = addslashes($_POST['mensagem']);

	$sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :mensagem, data_msg = NOW()");
	$sql->bindValue(":nome", $nome);
	$sql->bindValue(":mensagem", $msg);
	$sql->execute();

}


 ?>

<fieldset>
	<form method="POST">
		None:<br>
		<input type="text" name="nome"><br><br>

		Mensagem:<br>
		<textarea name="mensagem"></textarea><br><br>

		<input type="submit" Value="Enviar Comentário">


	</form>

</fieldset>
<br><br>

<?php 

$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
	foreach($sql->fetchAll() as $key):
		?>
			<strong><?php echo $key['nome']; ?></strong><br>
			<?php echo $key['msg']; ?>
			<?php echo $key['data_msg'] ?><br>
			<form method="GET">
			<input type="submit" value="apagar" name="delete" onchange="this.form.submit()">
			</form>

			<hr>

		<?php 
	endforeach;
}else{
	echo "não há mensagens";
}

if(isset($_GET['delete']) && !empty($_GET['delete'])){

	$id = addslashes($_GET['delete']);

	$sql = "SELECT * FROM mensagens WHERE id = '$id'";


}


 ?>

