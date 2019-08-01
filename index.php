<form action="#" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo"><br><br>
	<button>Enviar</button>
	
</form>


<?php
	if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])){
		date_default_timezone_set("Brazil/East");
		$ext = strtolower(substr($_FILES['arquivo']['name'], -4));
		$new_name = date("Y.m.d.H.i.s").$ext;
		$dir = 'img/';

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$new_name);
		//move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name);

		echo 'envio ok';

	}
	?>