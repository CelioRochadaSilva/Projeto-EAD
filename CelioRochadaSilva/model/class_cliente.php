<?php

   class Cliente{

   		private $codigo;
		private $nome;
		private $cpf;
		private $email;
		private $endereco;
		
		public function __construct($codigo=0, $nome="", $cpf="", $email="", $endereco=""){
			$this->codigo = $codigo;	
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->email = $email;
			$this->endereco = $endereco;
		}		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setCpf($cpf){
			$this->cpf = $cpf;
		}
		
		public function getCpf(){
			return $this->cpf;
		}
		
		public function setEmail($email){
			$this->email = $email;
		}
		
		public function getEmail(){
			return $this->email;
		}
		
		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}
		
		public function getEndereco(){
			return $this->endereco;
		}
	
   }
?>