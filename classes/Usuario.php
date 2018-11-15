<?php 

	class Usuario {

		public function __construct(){

		}

		private $nome;
		private $sobrenome;
		private $email;
		private $senha;
		private $nascimento;
		private $id;
		private $perfil;

		public function setId($id){
			$this->id = id;
		}

		public function getId(){
			return $this->id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail(){
			return $this->email;
		}
		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function getSenha(){
			return $this->senha;
		}
		public function setNascimento($nascimento){
			$this->nascimento = $nascimento;
		}

		public function getNascimento(){
			return $this->nascimento;
		}
		public function setSobrenome($sobrenome){
			$this->sobrenome = $sobrenome;
		}

		public function getSobrenome(){
			return $this->sobrenome;
		}
		public function setPerfil($perfil){
			$this->perfil = $perfil;
		}

		public function getPerfil(){
			return $this->perfil;
		}




	}


 ?>