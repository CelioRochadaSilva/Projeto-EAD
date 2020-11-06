<?php

   class Locacao{
   		private $codigo;
		private $datalocacao;
		private $datadevolucao;
		private $filme;
		private $cliente;
		
		public function __construct($codigo=0, $datalocacao="", $datadevolucao="", $filme="", $cliente=""){
			$this->codigo = $codigo;	
			$this->datalocacao = $datalocacao;
			$this->datadevolucao = $datadevolucao;
			$this->filme = $filme;
			$this->cliente = $cliente;
		}
		
		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setDataLocacao($datalocacao){
			$this->datalocacao = $datalocacao;
		}
		
		public function getDataLocacao(){
			return $this->datalocacao;
		}
		
		public function setDataDevolucao($datadevolucao){
			$this->datadevolucao = $datadevolucao;
		}
		
		public function getDataDevolucao(){
			return $this->datadevolucao;
		}
		
		public function setFilme($filme){
			$this->filme = $filme;
		}
		
		public function getFilme(){
			return $this->filme;
		}
		
		public function setCliente($cliente){
			$this->cliente = $cliente;
		}
		
		public function getCliente(){
			return $this->cliente;
		}
	
   }
?>