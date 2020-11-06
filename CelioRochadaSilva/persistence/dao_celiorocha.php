<?php
    require_once 'conexao.php';
	include '../model/class_celiorocha.php';
	
	class DAOCelioRocha{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarCelioRocha(CelioRocha $celiorocha){
			$primeironome = $celiorocha->getPrimeiroNome();
			$ultimonome = $celiorocha->getUltimoNome();			

			$sql = "INSERT INTO celiorocha (primeiroNome, ultimoNome) VALUES ('$primeironome', '$ultimonome')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarCelioRocha(){
			$lista = $this->conexao->executarQuery("SELECT * FROM celiorocha");
			$arrayCelioRocha = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$CelioRocha = new CelioRocha($linha['codigo'],$linha['primeiroNome'],$linha['ultimoNome']);
				array_push($arrayCelioRocha, $CelioRocha);
			}
			return $arrayCelioRocha;
		}
		
		public function removerCelioRocha($codigo){
			$sql = "DELETE FROM celiorocha WHERE codigo = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>