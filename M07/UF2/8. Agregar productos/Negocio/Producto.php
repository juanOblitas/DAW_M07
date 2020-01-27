<?php
	require_once "../Datos/DA_Producto.php";
	/**
	 * 
	 */
	class Producto
	{	
		private $id;
		private $nombre;
		private $seccion;
		private $descripcion;
		private $precio;
		private $url;
		
		function __construct($id=null, $nombre=null, $seccion=null, $descripcion=null, $precio, $url)
		{
			$this->id = $id;
			$this->nombre = $nombre;
			$this->seccion = $seccion;
			$this->descripcion = $descripcion;
			$this->precio = $precio;
			$this->url = $url;
		}

		public function getId() {
        	return $this->id;
    	}

		public function setId($id) {
			$this->id = $id;
		}

		public function getNombre() {
        	return $this->nombre;
    	}

		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}

		public function getSeccion() {
        	return $this->seccion;
    	}

		public function setSeccion($seccion) {
			$this->seccion = $seccion;
		}

		public function getDescripcion() {
        	return $this->descripcion;
    	}

		public function setDescripcion($descripcion) {
			$this->descripcion = $descripcion;
		}

		public function getPrecio() {
        	return $this->precio;
    	}

		public function setPrecio($precio) {
			$this->precio = $precio;
		}

		public function getUrl() {
        	return $this->url;
    	}

		public function setUrl($url) {
			$this->url = $url;
		}

		public function Insertar() {
    		$objDataUser = new DataUser();
        	$resultado = $objDataUser->Insertar($this->nombre,$this->seccion,$this->descripcion,$this->precio,$this->url);
	    	return $resultado;
    	}

    	public function Modificar() {
	        $objDataUser = new DataUser();
	        $resultado = $objDataUser->Modificar($this->id,$this->nombre,$this->seccion,$this->descripcion,$this->precio,$this->url);
		    return $resultado;
		}

		public function Eliminar(){
	        $objDataUser = new DataUser();
	        $resultado = $objDataUser->Eliminar($this->id);
		    return $resultado;
		}

	}

?>