<?php
   require '../persistence/dao_celiorocha.php';
   
   $objetoCelioRocha = new CelioRocha();
   $objetoCelioRocha->setPrimeiroNome($_REQUEST['primeiroNome']);
   $objetoCelioRocha->setUltimoNome($_REQUEST['ultimoNome']);
   
   $dao = new DAOCelioRocha();
   $dao->cadastrarCelioRocha($objetoCelioRocha); 
 	
	header('Location: ../view/view_celiorocha.php');
	exit;
?>