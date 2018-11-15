<?php 

	require_once "../classes/Usuario.php";
	require_once "../classes/Login.php";
	$user = new Usuario();

	$login = new Login();


	$user->setSenha($_POST['password']);
	$user->setEmail($_POST['email']);
	$resp = $login->logar($user);

	if(count($resp) > 0){ 	
		session_start();
		$_SESSION['perfil'] = $resp[0]->perfil;
		exit();
		header('../index.php');
		}else{
		echo "Não logado";
	}



 ?>