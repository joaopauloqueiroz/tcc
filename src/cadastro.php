	<?php 

	require_once "../classes/Usuario.php";
	require_once "../classes/Login.php";
	$user = new Usuario();

	if ($_POST['exampleRadios'] == 0 && $_POST['exampleRadio'] == 0 && $_POST['nao'] == 0) {
		$user->setPerfil(1);
	}

	if ($_POST['exampleRadios'] == 4 && $_POST['exampleRadio'] == 1 && $_POST['nao'] == 0 && $_POST['exampleRadios2'] == 3) {
		$user->setPerfil(2);
	}
	$user->setNome($_POST['nome']);
	$user->setSobrenome($_POST['sobrenome']);
	$user->setEmail($_POST['email']);
	$user->setSenha(password_hash($_POST['password'], PASSWORD_BCRYPT));
	$user->setNascimento($_POST['nascimento']);
	exit(print_r($user));
	$cad = new Login();
	
	if (!$cad->create($user)) {
		header('location: ../index.php?id=1');
	}else{
		header('location: ../index.php?id=2');
	}

 ?>