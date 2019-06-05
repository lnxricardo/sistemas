<?php 

require 'Cadastro.class.php';
$query = new Cadastro();


 ?>

	<?php require 'header.php';?>

	<div class="jumbotron">

	<h1>Horas Cadastradas</h1>
	<?php
		$total = $query->getSomaHoras();
		foreach($total as $t):
	?>

	<h3>Total de Horas Consumidas <?php echo $t['total_horas'];?></h3>
		<?php endforeach; ?>

	<hr>
	</div>

	<div class='container-fluid'>
	<br>
	

	<table class="table table-striped">
			<thead>
				<tr>
					<th>Ordem de Serviço</th>
					<th>Numero de chamado</th>
					<th>Empresa</th>
					<th>Data de Atendimento</th>
					<th>Chegada</th>
					<th>Saida</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
		<?php 	
		$data = $query->getAll();
		foreach($data as $item):
		 ?>

				<tr>
					<td><?php echo $item['os']; ?></td>
					<td><?php echo $item['chamado']; ?></td>
					<td><?php echo $item['empresa']; ?></td>
					<td><?php echo date('d/m/Y', strtotime($item['data'])); ?></td>
					<td><?php echo $item['entrada']; ?></td>
					<td><?php echo $item['saida']; ?></td>
					<td><?php echo $item['total']; ?></td>
				</tr>
		
		 <?php 
		 	endforeach;

		  ?>
		
		</tbody>
	</table>
	<a href="cadastra.php" class="btn btn-info" role="button">Cadastrar Atendimento</a>

	</div>

