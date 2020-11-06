<?php
    require_once 'conexao.php';
	include '../model/class_filme.php';
	
	class DAOFilme{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarFilme(Filme $filme){
			$titulo = $filme->getTitulo();
			$genero = $filme->getGenero();
			$valor =  $filme->getValor();
			$status = $filme->getStatus();

			$sql = "INSERT INTO filme (titulo, genero, valor, status) VALUES ('$titulo', '$genero', '$valor', '$status')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarFilmes(){
			$lista = $this->conexao->executarQuery("SELECT * FROM filme");
			$arrayFilmes = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$filme = new Filme($linha['codigo'],$linha['titulo'],$linha['genero'],$linha['valor'],$linha['status']);
				array_push($arrayFilmes,$filme);
			}
			return $arrayFilmes;
		}

		public function listarFilmesDisponivel(){
			$lista = $this->conexao->executarQuery("SELECT * FROM filme WHERE status = 'Disponivel'");
			$arrayFilmesDisponivel = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$filmeDisponivel = new Filme($linha['codigo'],$linha['titulo'],$linha['genero'],$linha['valor'],$linha['status']);
				array_push($arrayFilmesDisponivel,$filmeDisponivel);
			}
			return $arrayFilmesDisponivel;
		}
		
		public function removerFilme($codigo){
			$sql = "DELETE FROM filme WHERE codigo = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>