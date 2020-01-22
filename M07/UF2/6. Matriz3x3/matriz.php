<?php
	/**
	 * 
	 */
	class Matriz
	{	
		private $m11;
		private $m12;
		private $m13;
		private $m21;
		private $m22;
		private $m23;
		private $m31;
		private $m32;
		private $m33;
		
		function __construct($m11=null, $m12=null, $m13=null, $m21=null, $m22=null, $m23=null, $m31=null, $m32=null, $m33=null)
		{
			$this->m11 = $m11;
			$this->m12 = $m12;
			$this->m13 = $m13;
			$this->m21 = $m21;
			$this->m22 = $m22;
			$this->m23 = $m23;
			$this->m31 = $m31;
			$this->m32 = $m32;
			$this->m33 = $m33;
		}

		public function getm11() {
        	return $this->m11;
    	}

		public function setm11($m11) {
			$this->m11 = $m11;
		}

		public function getm12() {
        	return $this->m12;
    	}

		public function setm12($m12) {
			$this->m12 = $m12;
		}

		public function getm13() {
        	return $this->m13;
    	}

		public function setm13($m13) {
			$this->m13 = $m13;
		}

		public function getm21() {
        	return $this->m21;
    	}

		public function setm21($m21) {
			$this->m21 = $m21;
		}

		public function getm22() {
        	return $this->m22;
    	}

		public function setm22($m22) {
			$this->m22 = $m22;
		}

		public function getm23() {
        	return $this->m23;
    	}

		public function setm23($m23) {
			$this->m23 = $m23;
		}

		public function getm31() {
        	return $this->m31;
    	}

		public function setm31($m31) {
			$this->m31 = $m31;
		}

		public function getm32() {
        	return $this->m32;
    	}

		public function setm32($m32) {
			$this->m32 = $m32;
		}

		public function getm33() {
        	return $this->m33;
    	}

		public function setm33($m33) {
			$this->m33 = $m33;
		}

		public function calculoDeterminante(){
			$determinante= $this->m11 * $this->m22 * $this->m33 + 
							$this->m21 * $this->m32 * $this->m13 +
							$this->m31 * $this->m12 * $this->m23 - 
							($this->m13 * $this->m22 * $this->m31 + 
							$this->m23 * $this->m32 * $this->m11 + 
							$this->m33 * $this->m12 * $this->m21 );
			return $determinante;
		}
	}

	$matriz = new Matriz(1,2,3,0,2,3,3,5,2);
	echo $matriz -> calculoDeterminante();
?>
