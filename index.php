<!DOCTYPE html>
<html>
<head>
	<title>Tcc Crud</title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row col-md-8">
		<h1>Login</h1>
		
				<?php
					session_start();
					if (isset($_SESSION['perfil'])) {
						print_r($_SESSION['perfil']);
						exit();
					}
						if(isset($_GET['id']) && $_GET['id'] == 1){
							echo "<div class='alert alert-success'>Usuario cadastrado com sucesso</div>";
						}elseif(isset($_GET['id']) && $_GET['id'] == 2){
							echo "<div class='alert alert-danger'>Erro ao cadastrar Usuario</div>";
						}
				 ?>

			<form action="src/login.php" method="post">
				<div class="form-group">
				<input type="text" name="email" id="user" class="form-control" placeholder="E-mail">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Senha">
			</div>
			<div class="form-group">
				<input type="submit" value="Entrar" class="btn btn-success">
						<a href="cadastro.html" class="btn btn-success">Cadastrar</a>
			</div>
			</form>
		</div>
	</div>

</body>
</html>