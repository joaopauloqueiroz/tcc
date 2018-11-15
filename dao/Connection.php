<?php 

	class Connection extends PDO{
		private $pdo;
		private $table;
		public function __construct(){
			$this->pdo = new PDO('mysql:localhost=;dbname=tcc_teste' , 'root' , '' );
			$this->table = "usuarios_teste";
		}

		public function query($rawQuery, $params = array())
    {
        $stmt = $this->pdo->prepare($rawQuery);
        $this->setParams($stmt, $params);
        
        // exit(print_r($stmt));
        $stmt->execute();
        return $stmt;
    }
    /**
     * Metodo prasetar os params.
     *
     * @param [type] $statement
     * @param array  $parameters
     */
    private function setParams($statement, $parameters = array())
    {
        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }
    /**
     * Seta apenas um parametro.
     *
     * @param [type] $statement
     * @param [type] $key
     * @param [type] $value
     */
    private function setParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }


      /**
     * Buscar todos os registros de um usuario.
     */
    public function getAll()
    {
        $stmt = $this->query("SELECT * FROM $this->table");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    public function create($user){
        // exit(print_r($user));
        $stmt = $this->query("INSERT INTO $this->table (nome, sobrenome, senha, email, nascimento, perfil) VALUES 
            ('".$user->getNome()."','".$user->getSobrenome()."','".$user->getSenha()."','".$user->getEmail()."','".$user->getNascimento()."',".$user->getPerfil().");");

    }


    public function getOne($email){
        $stmt = $this->query("SELECT * FROM $this->table WHERE email = '".$email."'");
        
        return $stmt->fetchAll(PDO::FETCH_OBJ);        
    }


    public function login($email, $pass){
       $user = $this->getOne($email);

       if(count($user) > 0  && password_verify($pass, $user[0]->senha)){

        return $user;
       }
      return false;
    }

}

 ?>