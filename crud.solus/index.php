<?php 
	
	include 'add.class.php';

	$contato = new Contato();

	$contato->add('sricard@gmail.com', 'Ricoedo');
	$contato->add('sricarddo@gmail.com', 'Rimcodo');
	$contato->add('sricardde@gmail.com', 'Riwcodo');
	$contato->add('sricarddo@gmail.com', 'Ricoddo');
	$contato->add('sracfarddo@gmail.com', 'Ricodo');
	$contato->add('sricacrddo@gmail.com', 'Riccodo');

	

	$contato->deleteData('sricacrddo@gmail.com');

	







	





 ?>


<h2>ola</h2>