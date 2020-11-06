<?php

   class CelioRocha{
   		private $codigo;
		private $primeironome;
		private $ultimonome;	
		
		public function __construct($codigo=0, $primeironome="", $ultimonome=""){
			$this->codigo = $codigo;	
			$this->primeiroNome = $primeironome;
			$this->ultimoNome = $ultimonome;
			
		}
		
		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setPrimeiroNome($primeironome){
			$this->primeiroNome = $primeironome;
		}
		
		public function getPrimeiroNome(){
			return $this->primeiroNome;
		}
		
		public function setUltimoNome($ultimonome){
			$this->ultimoNome = $ultimonome;
		}
		
		public function getUltimoNome(){
			return $this->ultimoNome;
		}	
   }
?>