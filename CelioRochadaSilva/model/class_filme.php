<?php

   class Filme{
   		private $codigo;
		private $titulo;
		private $genero;
		private $valor;
		private $status;
		
		public function __construct($codigo=0, $titulo="", $genero="", $valor=0, $status=""){
			$this->codigo = $codigo;	
			$this->titulo = $titulo;
			$this->genero = $genero;
			$this->valor = $valor;
			$this->status = $status;
		}
		
		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		
		public function getTitulo(){
			return $this->titulo;
		}
		
		public function setGenero($genero){
			$this->genero = $genero;
		}
		
		public function getGenero(){
			return $this->genero;
		}
		
		public function setValor($valor){
			$this->valor = $valor;
		}
		
		public function getValor(){
			return $this->valor;
		}
		
		public function setStatus($status){
			$this->status = $status;
		}
		
		public function getStatus(){
			return $this->status;
		}
	
   }
?>