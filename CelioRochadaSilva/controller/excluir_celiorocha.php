<?php
       require '../persistence/dao_celiorocha.php';
   
   $objetoDao = new DAOCelioRocha();
   $objetoDao->removerCelioRocha($_REQUEST['codigo']);
 	
	header('Location: ../view/view_celiorocha.php');
	exit;
?>