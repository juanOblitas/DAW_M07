<?php
	require_once "../Datos/DA_Usuario.php";
	/**
	 * 
	 */
	class Usuario
	{	
		private $id;
		private $login;
		private $password;
		private $rol;
		
		function __construct($id=null, $login=null, $password=null, $rol=null)
		{
			$this->id = $id;
			$this->login = $login;
			$this->password = $password;
			$this->rol = $rol;
		}

		public function getId() {
        	return $this->id;
    	}

		public function setId($id) {
			$this->id = $id;
		}

		public function getLogin() {
        	return $this->login;
    	}

		public function setLogin($login) {
			$this->login = $login;
		}

		public function getPassword() {
        	return $this->password;
    	}

		public function setPassword($password) {
			$this->password = $password;
		}

		public function getRol() {
        	return $this->rol;
    	}

		public function setRol($rol) {
			$this->rol = $rol;
		}

		public function Insertar() {
    		$objDataUser = new DataUser();
        	$resultado = $objDataUser->Insertar($this->login,$this->password,$this->rol);
	    	return $resultado;
    	}

    	public function Modificar() {
	        $objDataUser = new DataUser();
	        $resultado = $objDataUser->Modificar($this->id,$this->login,$this->password,$this->rol);
		    return $resultado;
		}

		public function Eliminar(){
	        $objDataUser = new DataUser();
	        $resultado = $objDataUser->Eliminar($this->login);
		    return $resultado;
		}

		public function isUser($login,$password){

	        $objDataUser = new DataUser();
	        $registro = $objDataUser->isUser($login,$password);
	        return $registro;
    	}

    	public function showRol(){
	        $objDataUser = new DataUser();
	        $registro = $objDataUser->showRol($this->login,$this->password);
	        return $registro;
 		}

	}

?>