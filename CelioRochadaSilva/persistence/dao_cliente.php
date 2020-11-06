<?php
    require_once 'conexao.php';
	include '../model/class_cliente.php';
	
	class DAOCliente{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarCliente(Cliente $cliente){
			$nome = $cliente->getNome();
			$cpf = $cliente->getCpf();
			$email =  $cliente->getEmail();
			$endereco = $cliente->getEndereco();

			$sql = "INSERT INTO cliente (nome, cpf, email, endereco) VALUES ('$nome', '$cpf', '$email', '$endereco')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarClientes(){
			$lista = $this->conexao->executarQuery("SELECT * FROM cliente");
			$arrayCliente = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$cliente = new Cliente($linha['codigo'],$linha['nome'],$linha['cpf'],$linha['email'],$linha['endereco']);
				array_push($arrayCliente,$cliente);
			}
			return $arrayCliente;
		}
		
		public function removerCliente($codigo){
			$sql = "DELETE FROM cliente WHERE codigo = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>