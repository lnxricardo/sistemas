<?php require 'header.php'; ?>

	<div class="container">
		<h1>Cadastre-se</h1>

		<?php 
			require 'class/usuarios.class.php';
			$query = new Usuarios();

			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$senha = addslashes($_POST['senha']);
				$telefone = md5($_POST['telefone']);

				if(!empty($nome) && !empty($email) && !empty($senha)){

					if($query->cadastrar($nome, $email, $senha, $telefone)){
						?>
							<div class="alert alert-success">
								
								<strong>Parabéns</strong>usuário cadastrado com sucesso! <a href="login.php" class="alert-login">Faça o login agora!</a>

							</div>
						<?php 

					}else{

						?>
							<div class="alert alert-danger">
								
								<strong>Erro</strong>seu e-mail ja está cadastrado! <a href="login.php" class="alert-login">Faça o login agora!</a>

							</div>
						<?php 

					}


				} else {
					?>
					<div class="alert alert-warning">
						Favor preencher todos os campos!

					</div>
					<?php 
				}

			
		}

		 ?>

		<form method="POST">
			<div class="form-group">

				<label for="nome">Seu nome:</label>
				<input type="text" name="nome" id="nome" class="form-control">


			</div>

				<div class="form-group">

				<label for="email">Seu email:</label>
				<input type="email" name="email" id="email" class="form-control">


			</div>

				<div class="form-group">

				<label for="senha">Grave uma senha:</label>
				<input type="password" name="senha" id="senha" class="form-control">


			</div>

				<div class="form-group">

				<label for="telefone">Seu telefone:</label>
				<input type="tel" name="telefone" id="telefone" class="form-control">


			</div>
			<button class="btn btn-default">Cadastrar</button>
		</form>

	</div>


<?php require 'footer.php'; ?>