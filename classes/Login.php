<?php 
require "../dao/Connection.php";

	class Login {
		private $con;
		private $perfil;

		public function __construct(){
			$this->con = new Connection();
		}
		
		public function create($user){
			return $this->con->create($user);
		}

		public function logar($user){
			return $this->con->login($user->getEmail(), $user->getSenha());
		}


		public function getPerfil(){
			return $this->perfil;
		}

		public function setPerfil($perfil){
			$this->perfil = $perfil;
		}
	}

 ?>